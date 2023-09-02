<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function personalDealerSite()
    {
        return $this->belongsTo(PersonalDealerSite::class);
    }

    protected $fillable = [
        'name', 'email', 'number', 'contact_preference', 'contact_time', 'stock_number',
    ];
    

}
