<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review;

class ReviewSlider extends Component
{
    public $personalSiteDetailId;
    public $reviews;

    public function mount($personalSiteDetailId)
    {
        $this->personalSiteDetailId = $personalSiteDetailId;

        // Fetch approved reviews using Eloquent relationship
        $this->reviews = Review::where('personal_site_detail_id', $personalSiteDetailId)
            ->approved() // Assuming you have a scope 'approved'
            ->get(); // Fetch reviews as a Collection
    }

    public function render()
    {
        return view('livewire.review-slider', [
            'reviews' => $this->reviews
        ]);
    }
}
