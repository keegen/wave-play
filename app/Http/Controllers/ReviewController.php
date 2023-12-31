<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review; // Assuming you have a Review model
use App\Models\PersonalSiteDetail; // Assuming this is your model

class ReviewController extends Controller
{
    public function store(Request $request, $personalSiteDetailId)
    {
        // Validate the request data
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|max:1000',
            'name' => 'required|string|max:255'
        ]);

        // Check if the PersonalSiteDetail exists
        $personalSiteDetail = PersonalSiteDetail::find($personalSiteDetailId);
        if (!$personalSiteDetail) {
            return back()->with('error', 'Invalid dealer site.');
        }

        // Create a new review instance
        $review = new Review();
        $review->personal_site_detail_id = $personalSiteDetailId; // ID of the PersonalSiteDetail
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->name = $request->name;

        // Save the review
        $review->save();

        // Redirect back with a success message
        return back()->with('success', 'Your review has been submitted successfully.');
    }

    public function index()
    {
        // Retrieve all reviews, ordered by the newest first
        $reviews = Review::orderBy('created_at', 'desc')->get();
    
        // Return the view with the reviews data
        return view('themes.tallstack.dashboard.index', [ // Replace 'reviews.index' with the actual view path
            'reviews' => $reviews,
        ]);
    }


    public function approve($id)
{
    $review = Review::findOrFail($id);
    $review->update(['is_approved' => true]);

    return redirect()->route('dashboard.reviews.index')
        ->with('success', 'Review approved successfully.');
}

public function reject($id)
{
    $review = Review::findOrFail($id);
    $review->update(['is_approved' => false]);

    return redirect()->route('dashboard')
        ->with('success', 'Review rejected successfully.');
}

public function toggleStatus($id)
{
    $review = Review::findOrFail($id);
    $review->is_approved = !$review->is_approved;
    $review->save();
    
    session(['activeTab' => 'reviews']);
    return redirect()->route('dashboard'); // Or the appropriate route name
}



}
