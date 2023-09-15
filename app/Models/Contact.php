<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Contact extends Model
{

    public static function contactsLast30Days($dealerId)
    {
        return self::where('personal_dealer_site_id', $dealerId)
            ->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])
            ->count();
    }

    public static function contactsPrevious30Days($dealerId)
    {
        return self::where('personal_dealer_site_id', $dealerId)
            ->whereBetween('created_at', [Carbon::now()->subDays(60), Carbon::now()->subDays(30)])
            ->count();
    }

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'message', 'personal_dealer_site_id', 'notes', 'status'
    ];
    
    use HasFactory;
}
