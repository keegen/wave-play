<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\PersonalDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\PersonalSiteDetail;
use TANIOS\Airtable\Airtable;
use Illuminate\Support\Collection;
use App\Models\Lead;
use App\Models\UserThemePreference;
use App\Models\PersonalDealerTheme;
use App\Models\Review;




class PersonalSiteDetailController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $user = Auth::user();

    $detail = $user->personalSiteDetail()->firstOrNew();

    return view('theme::dashboard.siteinfo', compact('detail'));
}



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $user = Auth::user();

    // Check if the user already has a detail record
    $siteDetail = $user->personalSiteDetail ?? new PersonalSiteDetail;

    // Set the properties of the PersonalSiteDetail
    $siteDetail->fill($request->only([
        'name', 'about', 'facebook_link', 'instagram_link', 
        'twitter_link', 'youtube_link', 'customer_testimonial', 
        'customer_testimonial_name'
    ]));

    // Handle file uploads
    if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
        $path = $request->file('photo')->store('photos', 'public');
        $siteDetail->photo = $path;
    }

    if ($request->hasFile('cover_photo') && $request->file('cover_photo')->isValid()) {
        $path = $request->file('cover_photo')->store('cover_photos', 'public');
        $siteDetail->cover_photo = $path;
    }

    if ($request->hasFile('customer_testimonial_photo') && $request->file('customer_testimonial_photo')->isValid()) {
        $path = $request->file('customer_testimonial_photo')->store('testimonial_photos', 'public');
        $siteDetail->customer_testimonial_photo = $path;
    }

    // Save the PersonalSiteDetail through the relationship. 
    $user->personalSiteDetail()->save($siteDetail);

    return redirect()->route('themes/dashboard.siteinfo')->with(['detail' => $siteDetail]);
}



public function edit($id)
{
    $detail = PersonalSiteDetail::findOrFail($id);  // Fetch the model from the database
    return view('theme::dashboard.siteinfo', compact('detail'));
}

public function update(Request $request, $id)
{
    $siteDetail = PersonalSiteDetail::findOrFail($id);

    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'about' => 'required',
        'facebook_link' => 'max:100',
        'instagram_link' => 'max:100',
        'twitter_link' => 'max:100',
        'youtube_link' => 'max:100',
        'customer_testimonial' => 'string',
        'customer_testimonial_name' => 'string',
        'photo' => 'image',
        'cover_photo' => 'image',
        'customer_testimonial_photo' => 'image'
    ]);

    if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
        $path = $request->file('photo')->store('photos', 'public');
        $validatedData['photo'] = $path;
    }

    if ($request->hasFile('cover_photo') && $request->file('cover_photo')->isValid()) {
        $pathCover = $request->file('cover_photo')->store('cover_photos', 'public');
        $validatedData['cover_photo'] = $pathCover;
    }

    if ($request->hasFile('customer_testimonial_photo') && $request->file('customer_testimonial_photo')->isValid()) {
        $pathTestimonial = $request->file('customer_testimonial_photo')->store('testimonial_photos', 'public');
        $validatedData['customer_testimonial_photo'] = $pathTestimonial;
    }

    $siteDetail->update($validatedData);

    return redirect()->route('themes/dashboard.siteinfo')->with(['detail' => $siteDetail]);
}


public function show($id)
{
    $user = Auth::user();
    $detail = PersonalSiteDetail::findOrFail($id);

    return view('theme::dashboard.siteinfo', compact('detail', 'user'));
}


public function showlanding($name)
{
    $personalDealerSite = PersonalSiteDetail::where('name', $name)->first();

    if (!$personalDealerSite) {
        abort(404, 'Site not found.');
    }

    // Retrieve the user's selected theme
    $userThemePreference = UserThemePreference::where('user_id', $personalDealerSite->user_id)->first();
    $dealerTheme = PersonalDealerTheme::find($userThemePreference->theme_id ?? null);

    // Retrieve Airtable data here
    $newVehicles = $this->fetchAirtableData($personalDealerSite->user, 'new');
    $usedVehicles = $this->fetchAirtableData($personalDealerSite->user, 'used');

    // Check if there are no new vehicles available
    $noNewVehiclesAvailable = empty($newVehicles['records']);
    
    // Check if there are no used vehicles available
    $noUsedVehiclesAvailable = empty($usedVehicles['records']);

    // Retrieve reviews related to the PersonalDealerSite
    $reviews = Review::where('personal_site_detail_id', $personalDealerSite->id)
                     ->where('is_approved', 1)
                     ->get();

    // Check if there are reviews available
    $reviewsAvailable = !$reviews->isEmpty();

    return view('/personal_site_detail/dealer_landing', compact('personalDealerSite', 'newVehicles', 'usedVehicles', 'noNewVehiclesAvailable', 'noUsedVehiclesAvailable', 'dealerTheme', 'reviews', 'reviewsAvailable'));
}







public function showInventory()
{
    $personalSiteDetail = auth()->user()->personalSiteDetail;
    return view('themes.tallstack.dashboard.inventory', compact('personalSiteDetail'));
}

public function storeInventory(Request $request)
{
    $user = auth()->user();

    // Check if the user has a personalSiteDetail
    if (!$user->personalSiteDetail) {
        // Handle this situation - maybe create a new PersonalSiteDetail or return an error
        return redirect()->back()->with('error', 'No Personal Site Details found.');
    }

    // Validate the request data here
    $request->validate([
        'new_inventory_link' => 'nullable|url',
        'used_inventory_link' => 'nullable|url',
    ]);

    // Update the PersonalSiteDetail model and save it to the database
    $user->personalSiteDetail->update([
        'new_vehicle_link' => $request->input('new_inventory_link'),
        'used_vehicle_link' => $request->input('used_inventory_link'),
    ]);

    return redirect()->route('personal_site_detail.showInventory')->with('success', 'Inventory links updated successfully.');
}






public function fetchAirtableData(User $user, $type = 'new')
{
    // Check if the user has associated airtable details
    if (!$user->airtableDetail) {
        return ['records' => []]; // Return an empty array if airtable details don't exist
    }

    $airtableDetails = $user->airtableDetail;

    $baseId = $type === 'new' ? $airtableDetails->new_vehicles_base_id : $airtableDetails->used_vehicles_base_id;
    $tableName = $type === 'new' ? $airtableDetails->new_vehicles_table_name : $airtableDetails->used_vehicles_table_name;

    $airtable = new Airtable([
        'api_key' => $airtableDetails->api_key,
        'base'    => $baseId,
    ]);

    $request = $airtable->getContent($tableName);
    $vehicles = $request->getResponse();

    // Check if $vehicles is empty and return an empty array if so
    if (empty($vehicles)) {
        return ['records' => []]; // Return an empty array
    }

    return $vehicles;
}


public function storeLead(Request $request)
{
    // Log the form data before validation
    Log::info('Form Data:', $request->all());

    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'number' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'contact_preference' => 'required|string|max:255',
        'contact_time' => 'required|string|max:255',
        'stock_number' => 'required|string|max:255',
        'personal_dealer_site_id' => 'required|integer', // Add this validation rule
    ]);

    // Log the form data after validation
    Log::info('Validated Data:', $request->all());

    // Create a new Lead instance and populate it with form data
    $lead = new Lead([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'number' => $request->input('number'),
        'contact_preference' => $request->input('contact_preference'),
        'contact_time' => $request->input('contact_time'),
        'stock_number' => $request->input('stock_number'),
    ]);

    // Log the Lead data before saving
    Log::info('Lead Data:', $lead->toArray());

    // Associate the lead with the specified PersonalDealerSite
    $lead->personal_dealer_site_id = $request->input('personal_dealer_site_id');
    $lead->save();

    // You can redirect back with a success message or perform other actions
    return redirect()->back()->with('success', 'Lead submitted successfully');
}

}
