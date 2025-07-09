<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'name',
        'home_image',
        'banner_image',
        'phone',
        'email',
        'address',
        'description',
        'summary',
        'tagline',
        'cv'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
