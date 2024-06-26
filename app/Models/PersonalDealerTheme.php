<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDealerTheme extends Model
{
    protected $fillable = [
        'user_id', 'name', 'description', 'image_path', 'pd_theme_primary_color', 'pd_theme_secondary_color'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    use HasFactory;
}
