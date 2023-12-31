<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review; // Import your Review model

class ReviewForm extends Component
{
    public $personalSiteDetailId;
    public $dealerTheme;
    public $rating = 0;
    public $review;
    public $name;

    public function mount($personalSiteDetailId, $dealerTheme)
    {
        $this->personalSiteDetailId = $personalSiteDetailId;
        $this->dealerTheme = $dealerTheme;
    }
    
    public function setRating($rating)
{
    $this->rating = $rating;
}


    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'required|string|max:255',
        'name' => 'required|string|max:100',
    ];

    public function submit()
{
    $this->validate();

    // Retrieve the PersonalSiteDetail entry to get the owner's user ID
    $siteDetail = \App\Models\PersonalSiteDetail::findOrFail($this->personalSiteDetailId);
    $ownerUserId = $siteDetail->user_id;

    // Create and save the review with the owner's user ID and review text
    Review::create([
        'personal_site_detail_id' => $this->personalSiteDetailId,
        'user_id' => $ownerUserId,
        'rating' => $this->rating,
        'review_text' => $this->review, // Ensure this matches the column name in the database
        'guest_name' => $this->name,
        // Add any other fields that are required.
    ]);

    // Reset form fields
    $this->reset(['rating', 'review', 'name']);

    // Add additional logic like emitting an event or redirecting
    $this->emit('reviewSubmitted'); // Example event, you can name this event anything you want
    session()->flash('message', 'Review successfully submitted.'); // Optional: flash message to the session
}

    

    public function render()
    {
        return view('livewire.review-form', [
            'dealerTheme' => $this->dealerTheme
        ]);
    }
}
