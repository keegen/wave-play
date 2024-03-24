<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomDomain;
use App\Models\PersonalSiteDetail;

class CustomDomainController extends Controller
{
    // Display form to add custom domain
    public function create()
{
    $user = auth()->user();
    $personalSiteDetail = $user->personalSiteDetail()->with('customDomain')->first();

    return view('themes.tallstack.custom_domain.create', [
        'personalSiteDetail' => $personalSiteDetail,
        'existingDomain' => $personalSiteDetail->customDomain->domain ?? null,
    ]);
}

    // Handle form submission and save custom domain
    public function store(Request $request)
{
    \Log::info('Request data: ', $request->all()); // This will log all request data

    $validated = $request->validate([
        'domain' => 'required|url|unique:custom_domains,domain', // Adjust validation rules as needed
    ]);

    $personalSiteDetailId = $request->input('personal_site_detail_id');

    \Log::info('Personal Site Detail ID: ', ['ID' => $personalSiteDetailId]); // This will log the ID

    // Check if the user has a personal site detail ID
    if (!$personalSiteDetailId) {
        return back()->withErrors(['personal_site_detail_id' => 'Unable to find your personal site details.']);
    }

    // Create or update the custom domain in the database
    $customDomain = CustomDomain::updateOrCreate(
        ['personal_site_detail_id' => $personalSiteDetailId], // Use the ID from the user's personal site details
        ['domain' => $validated['domain']]
    );

    // Redirect back with success message
    return redirect()->back()->with('success', 'Custom domain added successfully.');
}

}
