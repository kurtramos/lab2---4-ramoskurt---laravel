<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class AdminCarController extends Controller
{
    //show cars from db
    // public function index(){
    //     // $cars = Car::all();
    //     $cars = Car::paginate(2);
    //     return view('cars.car', compact('cars'));
    // }
    public function index(Request $request)
    {
        $sortField = $request->input('sort', 'id'); 
        $sortOrder = $request->input('order', 'asc'); 

        // Validate sort field
        if (!in_array($sortField, ['id', 'user_id', 'created_at'])) {
            $sortField = 'id';
        }


        // Retrieve cars with sorting
        $cars = Car::orderBy($sortField, $sortOrder)->paginate(3);

        return view('cars.car', compact('cars'));
    }
 
    //add new cars, get uers
    public function create()
    {
        // $users = User::all(); // Fetch all users
        $users = User::where('role', 'admin')->get();
        return view('cars.create', compact('users')); // Pass users to the view
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'brand' => 'required|string|max:255',
        'user_id' => 'required|numeric',
        'series' => 'required|unique:cars|max:255',
        'color' => 'required|string|max:255',
        'price_per_day' => 'required|numeric',
        'details' => 'required|string|max:1000',
    ], [
        'brand.required' => 'The brand field is mandatory.',
        'user_id' => 'User ID must be filled in.',
        'series.required' => 'Please enter the series of the car.',
        'color.required' => 'Color is required. Please provide a color.',
        'price_per_day.required' => 'You must specify the price per day.',
        'price_per_day.numeric' => 'The price must be a valid number.',
        'details.required' => 'Details are required. Please include some information about the car.',
        'details.max' => 'Details cannot exceed 1000 characters.',
    ]);


    $car = new Car($request->all());
    $car->save();

    return redirect()->route('cars.all')->with('success', 'Car added successfully!');
    }

    //edit and update cars
    public function edit(Car $car)
{
    return view('cars.edit', compact('car'));
}

public function update(Request $request, Car $car)
{
    $request->validate([
        'brand' => 'required|string|max:255',
        'series' => 'required|string|max:255',
        'color' => 'required|string|max:255',
        'price_per_day' => 'required|numeric',
        'details' => 'required|string|max:1000',
    ]);

    $car->update($request->all());

    return redirect()->route('cars.all')->with('edit_success', 'Car updated successfully!');
}
}