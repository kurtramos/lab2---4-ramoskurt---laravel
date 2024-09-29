<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

     // Define which attributes can be mass-assigned
     protected $table = 'cars';
     protected $fillable = [
        'brand', 
        'series', 
        'color', 
        'price_per_day', 
        'details',
    ];

    // Define the relationship with reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
