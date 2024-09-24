<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Car Details') }}
        </h2>
    </x-slot>

                <!-- Tailwind CSS CDN -->
                <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

                <div class="container mx-auto mt-6 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-4">
            <!-- Back to List Button -->
            <a href="{{ route('listcars') }}" class="bg-yellow-500 text-black font-bold py-2 px-4 rounded hover:bg-yellow-600">
                Back to List
            </a>

            <!-- Brand Name (Centered) -->
            <h3 class="text-2xl font-bold text-white-900 text-center flex-1">{{ $selectedBrand['brand'] }}</h3>

            <!-- Explore More Brands Button -->
            <a href="{{ route('listcars') }}" class="bg-yellow-500 text-black font-bold py-2 px-4 rounded hover:bg-yellow-600">
                Explore More Brands
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($selectedBrand['series'] as $series)
            <div class="bg-white shadow sm:rounded-lg p-4">
                <img src="{{ $series['image'] }}" alt="{{ $series['name'] }}" class="w-full h-48 object-cover mb-4">
                <h3 class="text-xl font-bold text-gray-900">{{ $series['name'] }}</h3>
                <p class="text-gray-600">Color: {{ $series['color'] }}</p>
                <p class="text-yellow-500 font-semibold">Price: ₱{{ $series['price_per_day'] }}/day</p>
                <p class="mt-4 text-gray-700">{{ $series['details'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>