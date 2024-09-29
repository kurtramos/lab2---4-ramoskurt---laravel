<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Cars') }}
            </h2>
            

    </x-slot>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <style>
        .header-bg {
            background-image: url('https://www.motortrend.com/uploads/sites/5/2020/11/2021-MotorTrend-Car-of-the-Year-group-shot-1.jpg?w=768&width=768&q=75&format=webp');
            background-size: cover;
            background-position: center;
            color: white;
        }
    </style>

    <header class="header-bg text-center py-12">
        <h1 class="text-4xl font-bold">List of Cars</h1>
        <p class="mt-4 text-lg">Here are the cars currently available in our database.</p>
    </header>

    <div class="container mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6 text-center">
    <h3 class="text-lg font-medium leading-6 text-gray-900">Cars List</h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500 mx-auto">Details of all the cars listed in our database.</p>
</div>
 <!-- Add Car Button -->
 <a href="{{ route('addcar') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add New Car
        </a>
            <div class="py-12">
                
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                Brand
                            </th>
                            <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                Series
                            </th>
                            <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                Color
                            </th>
                            <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                Price Per Day
                            </th>
                            <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                Details
                            </th>
                            <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                {{ $car->brand }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                {{ $car->series }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                {{ $car->color }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                {{ $car->price_per_day }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                {{ $car->details }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href="{{ route('cars.edit', $car->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                    Edit
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>