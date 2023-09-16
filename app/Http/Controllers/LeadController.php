<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
class LeadController extends Controller
{

public function dashboard()
{
    $dealerId = auth()->user()->id; // Assuming the user id corresponds to the personal dealer site id
    $leadsCount = \App\Models\Lead::leadsLast30Days($dealerId);


    return view('themes.tallstack.dashboard.index', ['leadsCount' => $leadsCount]);
}
public function updateLead(Lead $lead, Request $request)
{
    $validatedData = $request->validate([
        'status' => 'required|in:New,Contacted,Attempted Contact,Working,Closed-Won,Closed-Lost',
        'note' => 'nullable|string',
    ]);

    $lead->status = $validatedData['status'];
    $lead->notes = $validatedData['note'];
    $lead->save();

    return response()->json(['message' => 'Error occurred'], 500);

}

public function show($id)
{
    $lead = Lead::findOrFail($id);
    return view('lead.details', ['lead' => $lead]);
}

public function update(Request $request, $id)
{
    // Find the lead
    $lead = Lead::findOrFail($id);
    
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'number' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'notes' => 'nullable|string',
        'status' => 'required|string',
        // Add validations for other fields if they are part of the form
    ]);
    
    // Update the fields
    $lead->name = $validatedData['name'];
    $lead->status = $validatedData['status'];
    $lead->notes = $validatedData['notes'];
    $lead->email = $validatedData['email'];
    $lead->number = $validatedData['number'];

    // Save the updates
    $lead->save();

    return redirect()->route('lead.details', ['lead' => $lead->id])->with('success', 'Lead updated successfully!');
}




}