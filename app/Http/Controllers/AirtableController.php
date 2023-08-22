<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AirtableController extends Controller
{
    public function showForm()
    {
        return view('airtable.airtable_form');
    }

    public function store(Request $request)
    {
        // Validate the submitted form data
        $validatedData = $request->validate([
            'api_key' => 'required',
            'new_vehicles_base_id' => 'required',
            'used_vehicles_base_id' => 'required',
            'new_vehicles_table_name' => 'required',
            'used_vehicles_table_name' => 'required',
        ]);

        // Assuming the authenticated user is using this form
        $user = Auth::user();

        // Update or create the user's Airtable details
        $user->airtableDetail()->updateOrCreate([], $validatedData);

        // Redirect back with a success message
        return redirect()->route('airtable.form')->with('success', 'Airtable information saved successfully.');
    }
}
