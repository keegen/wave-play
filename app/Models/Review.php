<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['rating', 'review_text', 'guest_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
