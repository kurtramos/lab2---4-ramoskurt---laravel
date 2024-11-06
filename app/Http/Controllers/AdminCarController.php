<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

use Intervention\Image\Laravel\Facades\Image;


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
        $cars = Car::orderBy($sortField, $sortOrder)->paginate(2);
        $trashedCars = Car::onlyTrashed()->paginate(2); // Retrieve trashed cars
    
        return view('cars.car', compact('cars', 'trashedCars'));
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
            'imageFile' => 'nullable|mimes:webp,png,jpg,jpeg|max:2048',
            'imageUrl' => 'nullable|url',
            'imageType' => 'required|in:file,url' 
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

        if ($request->input('imageType') === 'file' && !$request->hasFile('imageFile')) {
            return redirect()->back()->withErrors(['imageFile' => 'Please upload an image file.'])->withInput();
        }
    
        if ($request->input('imageType') === 'url' && !$request->filled('imageUrl')) {
            return redirect()->back()->withErrors(['imageUrl' => 'Please enter a valid image URL.'])->withInput();
        }
    
    // Create a new Car instance
    // $car = new Car($request->except('imageFile', 'imageUrl'));

  // Check if an image file is uploaded
//   if ($request->hasFile('imageFile')) {
    //insert data
    $image = $request->file('imageFile');
    $name_gen = hexdec(uniqid()) . '.' . 
    $image->getClientOriginalExtension();
    $image->move('images/cars/', $name_gen);
    $image = Image::read('images/cars/'.$name_gen)
    ->resize(400,200)->save();

    //   $image = $request->file('imageFile');
    //   $name_gen = hexdec(uniqid()) . '.' . 
    //   $image->getClientOriginalExtension();
    //   $image->move('images/cars/', $name_gen);

    //   //final image path
    $last_image = 'images/cars/' . $name_gen;


//   } elseif ($request->filled('imageUrl')) {
//       // If no file is uploaded, use the image URL
//       $last_image = $request->input('imageUrl');
//   }

  // Insert the new car record
  Car::insert([
      'brand' => $request->input('brand'),
      'user_id' => $request->input('user_id'),
      'series' => $request->input('series'),
      'color' => $request->input('color'),
      'price_per_day' => $request->input('price_per_day'),
      'details' => $request->input('details'),
      'image' => $last_image,
      'created_at' => now(),
      'updated_at' => now(),
  ]);

  return redirect()->route('cars.all')->with('success', 'Car added successfully!');
}
    
    //edit and update cars
    public function edit(Car $car)
{
    return view('cars.edit', compact('car'));
}

public function update(Request $request, Car $car)
{
    $validated = $request->validate([
        'brand' => 'required|string|max:255',
        'series' => 'required|string|max:255',
        'color' => 'required|string|max:255',
        'price_per_day' => 'required|numeric',
        'details' => 'required|string|max:1000',
        'imageFile' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        'imageUrl' => 'nullable|url',
        'imageType' => 'required|in:file,url',
    ]);

    // Validate image input based on imageType
    if ($request->input('imageType') === 'file' && !$request->hasFile('imageFile')) {
        return redirect()->back()->withErrors(['imageFile' => 'Please upload an image file.'])->withInput();
    }

    if ($request->input('imageType') === 'url' && !$request->filled('imageUrl')) {
        return redirect()->back()->withErrors(['imageUrl' => 'Please enter a valid image URL.'])->withInput();
    }

    // Update car attributes
    $car->fill($request->except('imageFile', 'imageUrl', 'imageType'));

    // Handle image upload or URL
    if ($request->input('imageType') === 'file' && $request->hasFile('imageFile')) {
        // Delete old image if it exists and is a file
        if ($car->image && filter_var($car->image, FILTER_VALIDATE_URL) === false && file_exists(public_path($car->image))) {
            unlink(public_path($car->image));
        }

        // New image upload logic
        $image = $request->file('imageFile');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move('images/cars/', $name_gen);

        // Final image path
        $last_image = 'images/cars/' . $name_gen;
        $car->image = $last_image;

    } elseif ($request->input('imageType') === 'url' && $request->filled('imageUrl')) {
        // Delete old image if it exists and is a file
        if ($car->image && filter_var($car->image, FILTER_VALIDATE_URL) === false && file_exists(public_path($car->image))) {
            unlink(public_path($car->image));
        }

        // Set the car's image attribute to the new URL
        $car->image = $request->input('imageUrl');
    }

    // Save the updated car
    $car->save();

    return redirect()->route('cars.all')->with('success', 'Car updated successfully!');
}


public function delete($id)
{
    $car = Car::find($id);
    if ($car) {
        $car->delete(); // Perform soft delete
    }
    return redirect()->route('cars.all')->with('soft_delete', 'Car soft deleted successfully.');
}

public function trashed()
{
    $cars = Car::onlyTrashed()->get();
    return view('cars.trashed', compact('cars')); // Add a view to display trashed cars
}

public function restore($id)
{
    $car = Car::withTrashed()->find($id);
    if ($car) {
        $car->restore(); // Restore soft-deleted car
    }
    return redirect()->route('cars.all')->with('success', 'Car restored successfully.');
}

public function forceDelete($id)
{
    $car = Car::withTrashed()->findOrfail($id);
    if ($car->image && file_exists(public_path($car->image))) {
        unlink(public_path($car->image));
    }

    $car->forceDelete(); // Permanently delete
    return redirect()->route('cars.all')->with('permanent_delete', 'Car permanently deleted.');
}


}