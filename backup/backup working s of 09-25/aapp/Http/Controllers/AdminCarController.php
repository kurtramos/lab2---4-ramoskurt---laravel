<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class AdminCarController extends Controller
{
    //show cars from db
    public function index(){
        $cars = Car::all();
        return view('cars.car', compact('cars'));
    }
    public function show($id)
    {
    $car = Car::find($id);
        if (!$car) {
        return redirect()->back()->with('error', 'Car not found');
    }
        return view('car.details', compact('car'));
    }

    //add new cars
    public function create()
    {
    return view('cars.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'brand' => 'required|string|max:255',
        'series' => 'required|string|max:255',
        'color' => 'required|string|max:255',
        'price_per_day' => 'required|numeric',
        'details' => 'required|string|max:1000',
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

    return redirect()->route('cars.all')->with('success', 'Car updated successfully!');
}



    // // Display all cars to the admin
    // public function index()
    // {
    //     $cars = Car::all();
    //     return view('admin.cars.index', compact('cars'));
    // }

    // // Show the form for creating a new car
    // public function create()
    // {
    //     return view('admin.cars.create');
    // }

    // // Store a newly created car in storage
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'brand' => 'required|string|max:255',
    //         'series' => 'required|string|max:255',
    //         'color' => 'required|string|max:255',
    //         'price_per_day' => 'required|numeric',
    //         'details' => 'required|string',
    //     ]);

    //     Car::create($request->all());

    //     return redirect()->route('cars.index')->with('success', 'Car added successfully!');
    // }

    // // Show the form for editing the specified car
    // public function edit(Car $car)
    // {
    //     return view('admin.cars.edit', compact('car'));
    // }

    // // Update the specified car in storage
    // public function update(Request $request, Car $car)
    // {
    //     $request->validate([
    //         'brand' => 'required|string|max:255',
    //         'series' => 'required|string|max:255',
    //         'color' => 'required|string|max:255',
    //         'price_per_day' => 'required|numeric',
    //         'details' => 'required|string',
    //     ]);

    //     $car->update($request->all());

    //     return redirect()->route('cars.index')->with('success', 'Car updated successfully!');
    // }
}
