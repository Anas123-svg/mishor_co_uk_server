<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthSafety extends Model
{
    protected $table = 'health_safety';

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
