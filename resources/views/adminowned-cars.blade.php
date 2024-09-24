<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owned Cars | KRCars</title>
</head>
<body>
    <h1>Your Owned Cars</h1>
    <p>View the cars you currently own.</p>
</body>
</html> -->


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Owned Cars') }}
        </h2>
    </x-slot>

            <!-- Tailwind CSS CDN -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            
    <style>
        .header-bg {
            background-image: url('https://www.motortrend.com/uploads/sites/5/2020/11/2021-MotorTrend-Car-of-the-Year-group-shot-1.jpg?w=768&width=768&q=75&format=webp ');
            background-size: cover;
            background-position: center;
            color: white;
        }
    </style>

    <header class="header-bg text-center py-12">
        <h1 class="text-4xl font-bold">My Owned Cars</h1>
        <p class="mt-4 text-lg">Here are the cars I currently own.</p>
    </header>

    <div class="container mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Cars List</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Explore the cars you own with detailed images and information.</p>
            </div>
            <div class="border-t border-gray-200">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
                    <!-- Example Car Item with Real Photos and Details -->
                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col items-center">
                        <img src="https://i.insider.com/5e9a0cafdcd88c113f7c08b0?width=750&format=jpeg&auto=webp" alt="Ford Mustang GT" class="w-64 h-40 object-cover mb-4 rounded-md">
                        <h4 class="text-lg font-semibold text-gray-900">Ford Mustang GT</h4>
                        <p class="text-sm text-gray-500">2023 • V8 Engine • 450 HP</p>
                        <p class="mt-2 text-sm text-gray-700 text-center">The Ford Mustang GT is a classic American muscle car with a powerful V8 engine and aggressive styling.</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col items-center">
                        <img src="https://car-images.bauersecure.com/wp-images/12942/063-tesla-model-3-2024-review.jpg" alt="Tesla Model 3" class="w-64 h-40 object-cover mb-4 rounded-md">
                        <h4 class="text-lg font-semibold text-gray-900">Tesla Model 3</h4>
                        <p class="text-sm text-gray-500">2022 • Electric • 258 HP</p>
                        <p class="mt-2 text-sm text-gray-700 text-center">The Tesla Model 3 is a modern electric car known for its impressive range, advanced tech, and sleek design.</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col items-center">
                        <img src="https://www.topgear.com/sites/default/files/2022/09/1-BMW-3-Series.jpg" alt="BMW 3 Series" class="w-64 h-40 object-cover mb-4 rounded-md">
                        <h4 class="text-lg font-semibold text-gray-900">BMW 3 Series</h4>
                        <p class="text-sm text-gray-500">2021 • Inline-6 Engine • 320 HP</p>
                        <p class="mt-2 text-sm text-gray-700 text-center">The BMW 3 Series is a luxury sedan that combines performance, comfort, and high-quality interiors.</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col items-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/2021_Toyota_Land_Cruiser_300_3.4_ZX_%28Colombia%29_front_view_04.png/640px-2021_Toyota_Land_Cruiser_300_3.4_ZX_%28Colombia%29_front_view_04.png" alt="Toyota Land Cruiser" class="w-64 h-40 object-cover mb-4 rounded-md">
                        <h4 class="text-lg font-semibold text-gray-900">Toyota Land Cruiser</h4>
                        <p class="text-sm text-gray-500">2023 • V6 Engine • 305 HP</p>
                        <p class="mt-2 text-sm text-gray-700 text-center">The Toyota Land Cruiser is a rugged and reliable SUV built for off-road adventures and tough terrain.</p>
                    </div>
                    <!-- Add more car items here -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
