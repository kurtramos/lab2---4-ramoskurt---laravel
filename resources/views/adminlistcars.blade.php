<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Cars') }}
        </h2>
         <!-- Add Car Button -->
         <a href="{{ route('addcar') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add New Car
        </a>
    </x-slot>

            <!-- Tailwind CSS CDN -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

            <div class="container mx-auto mt-6 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($cars as $car)
            <a href="{{ route('listdetails', ['brand' => $car['brand']]) }}" class="block bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ $car['image'] }}" alt="{{ $car['brand'] }}" class="w-full h-48 object-cover">
                <div class="px-4 py-2">
                    <h3 class="text-xl font-bold text-gray-900 text-center">{{ $car['brand'] }}</h3>
                </div>
            </a>

            
            @endforeach
        </div>
    </div>
</x-app-layout>