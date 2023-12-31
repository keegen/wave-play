<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review;

class ReviewSlider extends Component
{
    public $personalSiteDetailId;
    public $reviews;
    public $activeIndex = 0;

    public function mount($personalSiteDetailId)
{
    $this->personalSiteDetailId = $personalSiteDetailId;
    $this->reviews = Review::where('personal_site_detail_id', $personalSiteDetailId)
                           ->approved()
                           ->orderBy('created_at', 'desc') // Order by creation date, newest first
                           ->get();
}

    public function nextReview()
{
    $this->activeIndex = ($this->activeIndex + 1) % $this->reviews->count();
}

public function previousReview()
{
    $this->activeIndex = $this->activeIndex === 0 ? $this->reviews->count() - 1 : $this->activeIndex - 1;
}


    public function render()
    {
        return view('livewire.review-slider', [
            'reviews' => $this->reviews
        ]);
    }
}
