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
        'user_id',
        'series', 
        'color', 
        'price_per_day', 
        'details',
        'created_at',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id' , 'user_id');
    }

    // Define the relationship with reviews
    // public function reviews()
    // {
    //     return $this->hasMany(Review::class);
    // }
}
