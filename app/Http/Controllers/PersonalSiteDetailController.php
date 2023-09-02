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
    // You might want to add validation rules for these fields
    $user = Auth::user();

    // Check if the user already has a detail record
    $siteDetail = $user->personalSiteDetail;

    if (!$siteDetail) {
        $siteDetail = new PersonalSiteDetail;
        $siteDetail->user_id = $user->id;
    }

    // Set the properties of the PersonalSiteDetail
    $siteDetail->name = $request->name;
    $siteDetail->about = $request->about;
    $siteDetail->facebook_link = $request->facebook_link;
    $siteDetail->instagram_link = $request->instagram_link;
    $siteDetail->twitter_link = $request->twitter_link;
    $siteDetail->youtube_link = $request->youtube_link;
    $siteDetail->customer_testimonial = $request->customer_testimonial;
    $siteDetail->customer_testimonial_name = $request->customer_testimonial_name;

    if ($request->hasFile('photo')) {
        $path = $request->photo->store('photos', 'public');
        $siteDetail->photo = $path;
    }

    if ($request->hasFile('cover_photo')) {
        $path = $request->cover_photo->store('cover_photos', 'public');
        $siteDetail->cover_photo = $path;
    }

    if ($request->hasFile('customer_testimonial_photo')) {
        $path = $request->customer_testimonial_photo->store('testimonial_photos', 'public');
        $siteDetail->customer_testimonial_photo = $path;
    }

    // Save the PersonalSiteDetail
    $siteDetail->save();

    // Associate the PersonalSiteDetail with the user
    Auth::user()->personalSiteDetail()->associate($siteDetail);
    Auth::user()->save();
    
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
        'customer_testimonial' => 'string',
        'customer_testimonial_name' => 'string',
        'photo' => 'image',
        'cover_photo' => 'image',
        'customer_testimonial_photo' => 'image'
    ]);


    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->store('photos', 'public');
        $validatedData['photo'] = $path;

    }

    if ($request->hasFile('cover_photo')) {
        $pathCover = $request->file('cover_photo')->store('cover_photos', 'public');
        $validatedData['cover_photo'] = $pathCover;
    }
    
    if ($request->hasFile('customer_testimonial_photo')) {
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

    // Retrieve Airtable data here
    $newVehicles = $this->fetchAirtableData($personalDealerSite->user, 'new');
    $usedVehicles = $this->fetchAirtableData($personalDealerSite->user, 'used');

    // Check if there are no new vehicles available
    $noNewVehiclesAvailable = empty($newVehicles['records']);
    
    // Check if there are no used vehicles available
    $noUsedVehiclesAvailable = empty($usedVehicles['records']);

    return view('/personal_site_detail/dealer_landing', compact('personalDealerSite', 'newVehicles', 'usedVehicles', 'noNewVehiclesAvailable', 'noUsedVehiclesAvailable'));
}





public function inventory(Request $request)
{
    $user = auth()->user();
    $personalSiteDetail = $user->personalSiteDetail;


    // Validate the request data here if needed
    $request->validate([
        'new_inventory_link' => 'nullable|url',
        'used_inventory_link' => 'nullable|url',
    ]);
    

    // Update the PersonalSiteDetail model and save it to the database
    $personalSiteDetail->update([
        'new_vehicle_link' => $request->input('new_inventory_link'),
        'used_vehicle_link' => $request->input('used_inventory_link'),
    ]);

    return view('themes.tallstack.dashboard.inventory', compact('personalSiteDetail'));
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
    Log::info($request->all());

    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'number' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'contact_preference' => 'required|string|max:255',
        'contact_time' => 'required|string|max:255',
        'stock_number' => 'required|string|max:255',
    ]);

    $user = auth()->user();

    Log::info('User:', $user->toArray());

    $personalDealerSite = $user->personalDealerSite;

    Log::info('PersonalDealerSite:', $personalDealerSite->toArray());

    // Check if the PersonalDealerSite exists
    if (!$personalDealerSite) {
        // Handle the case where there's no associated site
        return redirect()->back()->with('error', 'No PersonalDealerSite found.');
    }

    // Create a new Lead instance and populate it with form data
    $lead = new Lead([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'number' => $request->input('number'),
        'contact_preference' => $request->input('contact_preference'),
        'contact_time' => $request->input('contact_time'),
        'stock_number' => $request->input('stock_number'),
    ]);

    // Associate the lead with the PersonalDealerSite
    $personalDealerSite->leads()->save($lead);
    // You can redirect back with a success message or perform other actions
    return redirect()->back()->with('success', 'Lead submitted successfully');
}



}
