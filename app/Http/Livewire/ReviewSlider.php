<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review;

class ReviewSlider extends Component
{
    public $reviews;

    public function mount()
    {
        $this->reviews = Review::where('approved', true)->get();
    }

    public function render()
    {
        return view('livewire.review-slider');
    }
}
