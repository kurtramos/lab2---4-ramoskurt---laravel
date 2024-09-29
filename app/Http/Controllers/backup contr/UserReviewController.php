<?php

namespace App\Http\Controllers;
use App\Models\Car;

use Illuminate\Http\Request;

class UserReviewController extends Controller
{

    public function reviewforms() {
        $cars = Car::all();  // Fetch all cars from the database
        return view('userreviewforms', compact('cars'));  // Pass cars to the view
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'content' => 'required|string'
        ]);

        Review::create([
            'car_id' => $request->car_id,
            'user_id' => auth()->id(),
            'content' => $request->content
        ]);

        return back()->with('success', 'Review added successfully!');
    }
}