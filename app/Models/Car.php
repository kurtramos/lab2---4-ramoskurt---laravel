<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;

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
        'image'
    ];
    protected $dates = ['deleted_at']; // Add this line if not present

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
