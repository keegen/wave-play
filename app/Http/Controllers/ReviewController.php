<?php

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, $userId)
    {
        $validatedData = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review_text' => 'required|string',
            'guest_name' => 'nullable|string'
        ]);

        $validatedData['user_id'] = $userId; // Assuming $userId is the ID of the user (car salesperson)

        Review::create($validatedData);

        return back()->with('success', 'Review submitted successfully!');
    }
}
