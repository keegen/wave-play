<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomDomain extends Model
{
    protected $fillable = [
        'custom_domain',
    ];
    public function personalSiteDetail()
{
    return $this->belongsTo(PersonalSiteDetail::class);
}

    use HasFactory;
}
