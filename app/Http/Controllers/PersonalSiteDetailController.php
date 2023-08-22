<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\PersonalDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\PersonalSiteDetail;
use TANIOS\Airtable\Airtable;



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
    $detail = PersonalSiteDetail::where('user_id', $user->id)->first();

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

    $siteDetail = new PersonalSiteDetail;
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

    // Use Voyager's user model for authentication
    $siteDetail->user_id = Auth::user()->getKey();

    $siteDetail->save();
    $user = Auth::user();

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

    return view('/personal_site_detail/dealer_landing', compact('personalDealerSite', 'newVehicles', 'usedVehicles'));
}




public function fetchAirtableData(User $user, $type = 'new')
{
    $airtableDetails = $user->airtableDetail;

    $baseId = $type === 'new' ? $airtableDetails->new_vehicles_base_id : $airtableDetails->used_vehicles_base_id;
    $tableName = $type === 'new' ? $airtableDetails->new_vehicles_table_name : $airtableDetails->used_vehicles_table_name;

    $airtable = new Airtable([
        'api_key' => $airtableDetails->api_key,
        'base'    => $baseId,
    ]);

    $request = $airtable->getContent($tableName);
    $vehicles = $request->getResponse();

    return $vehicles;
}

}
