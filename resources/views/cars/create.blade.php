<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Car') }}
        </h2>
    </x-slot>

        <!-- Tailwind CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

            <!-- display all error -->
            <!-- @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif -->


                <form method="POST" action="{{ route('cars.store') }}">
    @csrf

    <div class="mb-4">
        <label for="series" class="block text-gray-700 text-sm font-bold mb-2">USER ID:</label>
        <input type="text" name="user_id" id="user_id" value="{{ old('user_id') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('series') border-red-500 @enderror">
        @error('user_id')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="brand" class="block text-gray-700 text-sm font-bold mb-2">Brand:</label>
        <input type="text" name="brand" id="brand" value="{{ old('brand') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('brand') border-red-500 @enderror">
        @error('brand')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="series" class="block text-gray-700 text-sm font-bold mb-2">Series:</label>
        <input type="text" name="series" id="series" value="{{ old('series') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('series') border-red-500 @enderror">
        @error('series')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="color" class="block text-gray-700 text-sm font-bold mb-2">Color:</label>
        <input type="text" name="color" id="color" value="{{ old('color') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('color') border-red-500 @enderror">
        @error('color')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="price_per_day" class="block text-gray-700 text-sm font-bold mb-2">Price Per Day:</label>
        <input type="number" name="price_per_day" id="price_per_day" value="{{ old('price_per_day') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price_per_day') border-red-500 @enderror">
        @error('price_per_day')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="details" class="block text-gray-700 text-sm font-bold mb-2">Details:</label>
        <textarea name="details" id="details" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('details') border-red-500 @enderror">{{ old('details') }}</textarea>
        @error('details')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Add Car
        </button>
    </div>
</form>

            </div>
        </div>
    </div>
</x-app-layout>
