<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;



class PersonalSiteDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'about',
        'photo',
        'cover_photo',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'youtube_link',
        'customer_testimonial',
        'customer_testimonial_photo',
        'customer_testimonial_name'
    ];
    /**
     * Get the user that owns the personal site detail.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
 
}