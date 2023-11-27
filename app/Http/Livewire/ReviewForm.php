<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Review;

class ReviewForm extends Component
{
    public $author;
    public $content;
    public $rating;

    public function submit()
    {
        $this->validate([
            'author' => 'required',
            'content' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'author' => $this->author,
            'content' => $this->content,
            'rating' => $this->rating,
            'approved' => false, // Assuming all reviews need approval
        ]);

        session()->flash('message', 'Review submitted successfully.');
    }

    public function render()
    {
        return view('livewire.review-form');
    }
}
