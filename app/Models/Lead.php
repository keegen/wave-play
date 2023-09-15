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
    // Fetch the count of leads from the last 30 days for a specific dealer
    public static function leadsLast30Days($dealerId) {
        return Lead::where('personal_dealer_site_id', $dealerId)
            ->whereBetween('created_at', [now()->subDays(30), now()])
            ->count();
    }

    // Fetch the count of leads from 31 days ago to 60 days ago for a specific dealer
    public static function leadsPrevious30Days($dealerId) {
        return Lead::where('personal_dealer_site_id', $dealerId)
            ->whereBetween('created_at', [now()->subDays(60), now()->subDays(30)])
            ->count();
    }



    protected $fillable = [
        'name', 'email', 'number', 'contact_preference', 'contact_time', 'stock_number', 'status', 'notes', 'personal_dealer_site_id'
    ];
    

}
