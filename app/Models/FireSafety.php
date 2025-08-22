<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireSafety extends Model
{
    protected $table = 'fire_safety';

    protected $fillable = [
        'title',
        'description',
        'content',
        'images',
    ];

    protected $casts = [
        'images' => 'array', 
    ];
}
