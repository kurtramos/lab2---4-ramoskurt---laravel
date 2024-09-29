<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = [
            [
                'brand' => 'Toyota',
                'image' => 'https://di-uploads-pod3.dealerinspire.com/toyotaofclermont/uploads/2018/10/Toyota-cars-1.jpg',
                'series' => [
                    [
                        'name' => 'Corolla',
                        'color' => 'Red',
                        'price_per_day' => 2000,
                        'details' => 'A reliable sedan with excellent fuel efficiency.',
                        'image' => 'https://toyota.scene7.com/is/image/toyota/corolla_2021_red?qlt=70&wid=1024&hei=576&fmt=webp'
                    ],
                    [
                        'name' => 'Camry',
                        'color' => 'Blue',
                        'price_per_day' => 2500,
                        'details' => 'A mid-size car with premium features.',
                        'image' => 'https://toyota.scene7.com/is/image/toyota/camry_2022_blue?qlt=70&wid=1024&hei=576&fmt=webp'
                    ],
                ]
            ],
            [
                'brand' => 'Honda',
                'image' => 'https://honda-automoveis.pt/assets/default/images/THUMBS-600x315-CROP-CENTER/share.png',
                'series' => [
                    [
                        'name' => 'Civic',
                        'color' => 'Black',
                        'price_per_day' => 2200,
                        'details' => 'A popular compact car with sporty handling.',
                        'image' => 'https://hondanews.com/uploads/2021/03/2022-Honda-Civic-Hatchback.jpg'
                    ],
                    [
                        'name' => 'Accord',
                        'color' => 'White',
                        'price_per_day' => 2700,
                        'details' => 'A larger sedan with advanced safety features.',
                        'image' => 'https://www.honda.com/content/dam/honda/na/us/english/brand/cars/accord/2022-accord-sport-se-sedan-modern-steel-metallic-exterior-front-angle-full.jpg'
                    ],
                ]
            ],
            [
                'brand' => 'Ford',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Ford_Motor_Company_Logo.svg/2048px-Ford_Motor_Company_Logo.svg.png',
                'series' => [
                    [
                        'name' => 'Mustang',
                        'color' => 'Yellow',
                        'price_per_day' => 3000,
                        'details' => 'An iconic sports car with high performance.',
                        'image' => 'https://media.ford.com/content/fordmedia/fna/us/en/news/2022/08/17/2023-mustang-machs-performance-edition-2--2023-mustang-machs-perf/_jcr_content/image.img.881.495.jpg/1660840418655.jpg'
                    ],
                    [
                        'name' => 'Explorer',
                        'color' => 'Silver',
                        'price_per_day' => 3200,
                        'details' => 'A versatile SUV with great off-road capabilities.',
                        'image' => 'https://media.ford.com/content/fordmedia/fna/us/en/news/2022/03/30/all-new-ford-explorer-sets-new-standards-in-midsize-suv-segment/_jcr_content/root/hero2-c/container/image_with_caption.coreimg.jpeg/1648586202624/2023-explorer-sport-hero.jpg'
                    ],
                ]
            ],
            [
                'brand' => 'Isuzu',
                'image' => 'https://www.carlogos.org/logo/Isuzu-logo-1974-3000x3000.png',
                'series' => [
                    [
                        'name' => 'D-Max',
                        'color' => 'White',
                        'price_per_day' => 2800,
                        'details' => 'A tough pickup truck with a powerful engine.',
                        'image' => 'https://www.isuzuute.com.au/media/1711/21my-isuzu-d-max-exterior-1.jpg'
                    ],
                    [
                        'name' => 'MU-X',
                        'color' => 'Black',
                        'price_per_day' => 3000,
                        'details' => 'A reliable SUV with a strong performance.',
                        'image' => 'https://www.isuzuute.com.au/media/1856/mu-x-onroad.jpg'
                    ],
                ]
            ],
        ];

        return view('adminlistcars', compact('cars'));
    }

    public function show($brand)
    {
        $cars = [
            // Same car data as in the index method
            [
                'brand' => 'Toyota',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Toyota_EU_logo.svg/2048px-Toyota_EU_logo.svg.png',
                'series' => [
                    [
                        'name' => 'Corolla',
                        'color' => 'Red',
                        'price_per_day' => 2000,
                        'details' => 'A reliable sedan with excellent fuel efficiency.',
                        'image' => 'https://toyota.scene7.com/is/image/toyota/corolla_2021_red?qlt=70&wid=1024&hei=576&fmt=webp'
                    ],
                    [
                        'name' => 'Camry',
                        'color' => 'Blue',
                        'price_per_day' => 2500,
                        'details' => 'A mid-size car with premium features.',
                        'image' => 'https://toyota.scene7.com/is/image/toyota/camry_2022_blue?qlt=70&wid=1024&hei=576&fmt=webp'
                    ],
                ]
            ],
            [
                'brand' => 'Honda',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Honda_logo.svg/2048px-Honda_logo.svg.png',
                'series' => [
                    [
                        'name' => 'Civic',
                        'color' => 'Black',
                        'price_per_day' => 2200,
                        'details' => 'A popular compact car with sporty handling.',
                        'image' => 'https://hondanews.com/uploads/2021/03/2022-Honda-Civic-Hatchback.jpg'
                    ],
                    [
                        'name' => 'Accord',
                        'color' => 'White',
                        'price_per_day' => 2700,
                        'details' => 'A larger sedan with advanced safety features.',
                        'image' => 'https://www.honda.com/content/dam/honda/na/us/english/brand/cars/accord/2022-accord-sport-se-sedan-modern-steel-metallic-exterior-front-angle-full.jpg'
                    ],
                ]
            ],
            [
                'brand' => 'Ford',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Ford_Motor_Company_Logo.svg/2048px-Ford_Motor_Company_Logo.svg.png',
                'series' => [
                    [
                        'name' => 'Mustang',
                        'color' => 'Yellow',
                        'price_per_day' => 3000,
                        'details' => 'An iconic sports car with high performance.',
                        'image' => 'https://media.ford.com/content/fordmedia/fna/us/en/news/2022/08/17/2023-mustang-machs-performance-edition-2--2023-mustang-machs-perf/_jcr_content/image.img.881.495.jpg/1660840418655.jpg'
                    ],
                    [
                        'name' => 'Explorer',
                        'color' => 'Silver',
                        'price_per_day' => 3200,
                        'details' => 'A versatile SUV with great off-road capabilities.',
                        'image' => 'https://media.ford.com/content/fordmedia/fna/us/en/news/2022/03/30/all-new-ford-explorer-sets-new-standards-in-midsize-suv-segment/_jcr_content/root/hero2-c/container/image_with_caption.coreimg.jpeg/1648586202624/2023-explorer-sport-hero.jpg'
                    ],
                ]
            ],
            [
                'brand' => 'Isuzu',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Isuzu_Motors_logo.svg/2048px-Isuzu_Motors_logo.svg.png',
                'series' => [
                    [
                        'name' => 'D-Max',
                        'color' => 'White',
                        'price_per_day' => 2800,
                        'details' => 'A tough pickup truck with a powerful engine.',
                        'image' => 'https://www.isuzuute.com.au/media/1711/21my-isuzu-d-max-exterior-1.jpg'
                    ],
                    [
                        'name' => 'MU-X',
                        'color' => 'Black',
                        'price_per_day' => 3000,
                        'details' => 'A reliable SUV with a strong performance.',
                        'image' => 'https://www.isuzuute.com.au/media/1856/mu-x-onroad.jpg'
                    ],
                ]
            ],
        ];

        $selectedBrand = collect($cars)->firstWhere('brand', $brand);

        return view('adminlistdetails', compact('selectedBrand'));
    }
    // Show the form to create a new car
    public function create()
    {
        return view('cars.add');  // Return the 'add car' view
    }

    // Handle the form submission to store a new car
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price_per_day' => 'required|numeric',
            'details' => 'required|string',
        ]);

        // Handle the file upload
        $imagePath = $request->file('image')->store('public/cars');

        // Add the new car to the list (in a real app, this should save to the database)
        $car = [
            'brand' => $request->brand,
            'image' => $imagePath,
            'price_per_day' => $request->price_per_day,
            'details' => $request->details,
        ];

        // You would normally save this car to the database here

        return redirect()->route('listofcars')->with('success', 'Car added successfully!');
    }

    // Show the form to edit an existing car
    public function edit($brand)
    {
        $cars = $this->getCars(); // Retrieve cars
        $car = collect($cars)->firstWhere('brand', $brand); // Find the car by brand

        if (!$car) {
            return redirect()->route('listofcars')->with('error', 'Car not found');
        }

        return view('cars.edit', compact('car'));
    }

    // Handle the form submission to update an existing car
    public function update(Request $request, $brand)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',  // Image is optional
            'price_per_day' => 'required|numeric',
            'details' => 'required|string',
        ]);

        // Handle the file upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/cars');
        }

        // Logic to update the car (replace existing data in your storage or database)
        $cars = $this->getCars(); // Retrieve the cars
        $carIndex = collect($cars)->search(fn($item) => $item['brand'] === $brand);

        if ($carIndex === false) {
            return redirect()->route('listofcars')->with('error', 'Car not found');
        }

        // Update the car details
        $cars[$carIndex]['brand'] = $request->brand;
        $cars[$carIndex]['price_per_day'] = $request->price_per_day;
        $cars[$carIndex]['details'] = $request->details;
        if (isset($imagePath)) {
            $cars[$carIndex]['image'] = $imagePath;
        }

        // In a real scenario, you'd update this in the database.

        return redirect()->route('listofcars')->with('success', 'Car updated successfully!');
    }

    // Helper method to return static list of cars
    private function getCars()
    {
        return [
            [
                'brand' => 'Toyota',
                'image' => 'https://di-uploads-pod3.dealerinspire.com/toyotaofclermont/uploads/2018/10/Toyota-cars-1.jpg',
                'series' => [
                    [
                        'name' => 'Corolla',
                        'color' => 'Red',
                        'price_per_day' => 2000,
                        'details' => 'A reliable sedan with excellent fuel efficiency.',
                        'image' => 'https://toyota.scene7.com/is/image/toyota/corolla_2021_red?qlt=70&wid=1024&hei=576&fmt=webp'
                    ],
                    [
                        'name' => 'Camry',
                        'color' => 'Blue',
                        'price_per_day' => 2500,
                        'details' => 'A mid-size car with premium features.',
                        'image' => 'https://toyota.scene7.com/is/image/toyota/camry_2022_blue?qlt=70&wid=1024&hei=576&fmt=webp'
                    ],
                ]
            ],
            [
                'brand' => 'Honda',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Honda_logo.svg/2048px-Honda_logo.svg.png',
                'series' => [
                    [
                        'name' => 'Civic',
                        'color' => 'Black',
                        'price_per_day' => 2200,
                        'details' => 'A popular compact car with sporty handling.',
                        'image' => 'https://hondanews.com/uploads/2021/03/2022-Honda-Civic-Hatchback.jpg'
                    ],
                    [
                        'name' => 'Accord',
                        'color' => 'White',
                        'price_per_day' => 2700,
                        'details' => 'A larger sedan with advanced safety features.',
                        'image' => 'https://www.honda.com/content/dam/honda/na/us/english/brand/cars/accord/2022-accord-sport-se-sedan-modern-steel-metallic-exterior-front-angle-full.jpg'
                    ],
                ]
            ],
            [
                'brand' => 'Ford',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Ford_Motor_Company_Logo.svg/2048px-Ford_Motor_Company_Logo.svg.png',
                'series' => [
                    [
                        'name' => 'Mustang',
                        'color' => 'Yellow',
                        'price_per_day' => 3000,
                        'details' => 'An iconic sports car with high performance.',
                        'image' => 'https://media.ford.com/content/fordmedia/fna/us/en/news/2022/08/17/2023-mustang-machs-performance-edition-2--2023-mustang-machs-perf/_jcr_content/image.img.881.495.jpg/1660840418655.jpg'
                    ],
                    [
                        'name' => 'Explorer',
                        'color' => 'Silver',
                        'price_per_day' => 3200,
                        'details' => 'A versatile SUV with great off-road capabilities.',
                        'image' => 'https://media.ford.com/content/fordmedia/fna/us/en/news/2022/03/30/all-new-ford-explorer-sets-new-standards-in-midsize-suv-segment/_jcr_content/root/hero2-c/container/image_with_caption.coreimg.jpeg/1648586202624/2023-explorer-sport-hero.jpg'
                    ],
                ]
            ],
            [
                'brand' => 'Isuzu',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Isuzu_Motors_logo.svg/2048px-Isuzu_Motors_logo.svg.png',
                'series' => [
                    [
                        'name' => 'D-Max',
                        'color' => 'White',
                        'price_per_day' => 2800,
                        'details' => 'A tough pickup truck with a powerful engine.',
                        'image' => 'https://www.isuzuute.com.au/media/1711/21my-isuzu-d-max-exterior-1.jpg'
                    ],
                    [
                        'name' => 'MU-X',
                        'color' => 'Black',
                        'price_per_day' => 3000,
                        'details' => 'A reliable SUV with a strong performance.',
                        'image' => 'https://www.isuzuute.com.au/media/1856/mu-x-onroad.jpg'
                    ],
                ]
            ],
        ];
    }
}
