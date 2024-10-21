<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car; 
use App\Models\User;

class UserCarController extends Controller
{
    //indivpost
    public function indivpost()
    {
        return view('userindivpost');
    }
    public function index()
    {
        $cars = Car::all(); // Fetch all cars
        $users = User::all(); // Fetch all users
        return view('userindivpost', ['cars' => $cars, 'users' => $users]);
    }
    public function show($id)
    {
        // $car = Car::findOrFail($id); // Fetch the car or fail with a 404 response
        return view('userindivpost', compact('car')); // Show the individual car    
       
    }

}
