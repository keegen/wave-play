<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review; // Import your Review model

class ReviewForm extends Component
{
    public $personalSiteDetailId;
    public $rating;
    public $review;
    public $name;

    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'required|string|max:255',
        'name' => 'required|string|max:100',
    ];

    public function submit()
    {
        $this->validate();

        // Create and save the review
        Review::create([
            'personal_site_detail_id' => $this->personalSiteDetailId,
            'rating' => $this->rating,
            'review' => $this->review,
            'name' => $this->name,
        ]);

        // Reset form fields
        $this->reset(['rating', 'review', 'name']);

        // Add additional logic like sending a notification, etc.
    }

    public function render()
    {
        return view('livewire.review-form');
    }
}
