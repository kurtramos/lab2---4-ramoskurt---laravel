<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

     // Define which attributes can be mass-assigned
     protected $fillable = [
        'car_id', 'user_id', 'content'
    ];

    // Define the relationship to the Car
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    // Define the relationship to the User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
