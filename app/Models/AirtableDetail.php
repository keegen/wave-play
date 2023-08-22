<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Voyager\Models\User;

class AirtableDetail extends Model
{
    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(Voyager\Models\User::class);

    }
    protected $fillable = [
        'api_key',
        'new_vehicles_base_id',
        'used_vehicles_base_id',
        'new_vehicles_table_name',
        'used_vehicles_table_name'

    ];
}
