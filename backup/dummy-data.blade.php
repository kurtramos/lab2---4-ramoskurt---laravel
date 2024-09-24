<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy Data | KRCars</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
    <!-- Header
    <header class="bg-gray-900 text-white border-b-2 border-yellow-500">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-3xl font-bold text-yellow-500">KRCars</h1>
            <nav class="flex space-x-4">
                <a href="{{ route('dashboard') }}" class="text-white hover:text-yellow-500">Dashboard</a>
                <a href="{{ route('profile') }}" class="text-white hover:text-yellow-500">Profile</a>
                <a href="{{ route('hobbies') }}" class="text-white hover:text-yellow-500">Hobbies</a>
                <a href="{{ route('favorite-movies') }}" class="text-white hover:text-yellow-500">Favorite Movies</a>
                <a href="{{ route('owned-cars') }}" class="text-white hover:text-yellow-500">Owned Cars</a>
                <a href="{{ route('quotation-for-car-rent') }}" class="text-white hover:text-yellow-500">Quotation for Car Rent</a>
                <a href="{{ route('dummy-data') }}" class="text-white hover:text-yellow-500">Dummy Data</a>
            </nav>
        </div>
    </header> -->
       <!-- Header -->
       <header class="bg-gray-900 text-white border-b-2 border-yellow-500">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-3xl font-bold text-yellow-500">KRCars</h1>
            <!-- <nav class="flex space-x-4">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-white hover:text-yellow-500">Dashboard</x-nav-link>
                <x-nav-link href="{{ route('profile') }}" :active="request()->routeIs('profile')" class="text-white hover:text-yellow-500">Profile</x-nav-link>
                <x-nav-link href="{{ route('hobbies') }}" :active="request()->routeIs('hobbies')" class="text-white hover:text-yellow-500">Hobbies</x-nav-link>
                <x-nav-link href="{{ route('favorite-movies') }}" :active="request()->routeIs('favorite-movie')" class="text-white hover:text-yellow-500">Favorite Movies</x-nav-link>
                <x-nav-link href="{{ route('owned-cars') }}" :active="request()->routeIs('owned-cars')" class="text-white hover:text-yellow-500">Owned Cars</x-nav-link>
                <x-nav-link href="{{ route('quotation-for-car-rent') }}" :active="request()->routeIs('quotation-for-car-rent')" class="text-white hover:text-yellow-500">Quotation for Car Rent</x-nav-link>
            </nav> -->

            <!-- Authentication Links -->
            @if (Route::has('login'))
                <div class="flex space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Home</a>
                    <a href="{{ route('about') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">About</a>
                    <a href="{{ route('contact') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Contact Us</a>
                    <a href="{{ route('brand-of-cars') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Brand of Cars</a>
                    <a href="{{ route('rent-a-car') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Rent a Car</a>
                    <a href="{{ route('dummy-data') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">List a Car</a>

                    @auth
                        <a href="{{ url('/dashboard') }}" class="ml-4 font-semibold text-gray-600 hover:text-yellow-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="ml-4 font-semibold text-gray-600 hover:text-yellow-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-yellow-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </header>

    <!-- Hero Section -->
    <div class="hero relative text-center text-white">
        <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/huracan/2023/09_18_refresh/gallery/gw_hura_01.jpg" alt="Hero Car" class="w-full h-auto brightness-60">
        <div class="hero-content absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-60">
            <h1 class="text-4xl font-bold text-yellow-500">List a Car</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto py-16 px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-white">
            <h1 class="text-4xl font-bold text-yellow-500 mb-6 text-center">Dummy Data</h1>
            <table class="min-w-full bg-gray-700 rounded-lg">
                <thead>
                    <tr class="bg-gray-900 text-yellow-500">
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4">Email</th>
                        <th class="py-2 px-4">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr class="border-b border-gray-600">
                            <td class="py-2 px-4">{{ $item['name'] }}</td>
                            <td class="py-2 px-4">{{ $item['email'] }}</td>
                            <td class="py-2 px-4">{{ $item['phone'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 KRCars. All rights reserved.</p>
    </footer>
</body>
</html>
