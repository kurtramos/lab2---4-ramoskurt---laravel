<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car; 

class UserCarController extends Controller
{
    //indivpost
    public function indivpost()
    {
        return view('userindivpost');
    }
    public function index()
    {
        $cars = Car::all(); // Fetch all cars from the database
        return view('userindivpost', compact('cars')); // Assuming 'cars.indivposts' is the view you want to show
    }
    public function show($id)
    {
        $car = Car::findOrFail($id); // Fetch the car or fail with a 404 response
        return view('userindivpost', compact('car')); // Show the individual car post
    }
    // public function index()
    // {
    //     $cars = Car::all(); // Fetch all cars or implement pagination
    //     return view('cars.indivposts', compact('cars')); // Assuming 'cars.indivposts' is your view for listing car posts
    // }
    // public function show($id)
    // {
    // $car = Car::find($id);
    //     if (!$car) {
    //     return redirect()->back()->with('error', 'Car not found');
    // }
    //     return view('car.details', compact('car'));
    // }
    // public function show($id)
    // {
    //     $car = Car::findOrFail($id);  // Find the car or fail with 404
    //     return view('cars.indivposts', compact('car'));  // Pass the car to the view
    // }
}
