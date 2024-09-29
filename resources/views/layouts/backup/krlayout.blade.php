<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'KRCars') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
    <!-- Header -->
    <header class="bg-gray-900 text-white border-b-2 border-yellow-500">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-3xl font-bold text-yellow-500">KRCars</h1>
            <nav class="flex space-x-4">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-white hover:text-yellow-500">Dashboard</x-nav-link>
                <x-nav-link href="{{ route('profile') }}" :active="request()->routeIs('profile')" class="text-white hover:text-yellow-500">Profile</x-nav-link>
                <x-nav-link href="{{ route('hobbies') }}" :active="request()->routeIs('hobbies')" class="text-white hover:text-yellow-500">Hobbies</x-nav-link>
                <x-nav-link href="{{ route('favorite-movies') }}" :active="request()->routeIs('favorite-movie')" class="text-white hover:text-yellow-500">Favorite Movies</x-nav-link>
                <x-nav-link href="{{ route('owned-cars') }}" :active="request()->routeIs('owned-cars')" class="text-white hover:text-yellow-500">Owned Cars</x-nav-link>
                <x-nav-link href="{{ route('quotation-for-car-rent') }}" :active="request()->routeIs('quotation-for-car-rent')" class="text-white hover:text-yellow-500">Quotation for Car Rent</x-nav-link>
            </nav>
        </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 KRCars. All rights reserved.</p>
    </footer>
</body>
</html>
