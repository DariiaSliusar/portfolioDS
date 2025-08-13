<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon',
    ];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
