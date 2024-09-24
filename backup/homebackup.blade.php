<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | KRCars</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
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
    
    <div class="hero relative text-center text-white">
        <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/huracan/2023/09_18_refresh/gallery/gw_hura_01.jpg" alt="Hero Car" class="w-full h-auto brightness-60">
        <div class="hero-content absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-60">
            <h1 class="text-4xl font-bold text-yellow-500">Welcome to KRCars</h1>
            <p class="mt-4 text-lg">Your one-stop solution for renting and learning about cars.</p>
            <a href="#explore" class="mt-6 bg-yellow-500 text-black font-bold py-2 px-4 rounded hover:bg-yellow-600">Explore Our Cars</a>
        </div>
    </div>

    <section id="explore" class="explore py-16 text-center bg-gray-800">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-yellow-500 mb-6">Discover Excellence</h2>
            <p class="text-lg text-gray-300 mb-8">Explore our collection of premium cars designed to deliver unparalleled performance and style.</p>
            <div class="car-list flex justify-center flex-wrap gap-8">
                <div class="car-item bg-gray-700 rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105">
                    <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/huracan/2023/09_18_refresh/s/gw_hura_s_03.jpg" alt="Car 1" class="w-full h-48 object-cover">
                    <div class="car-item-content p-4">
                        <h3 class="text-2xl font-bold text-yellow-500">Huracan</h3>
                        <p class="mt-2 text-gray-400">Discover all the new models of this exclusive car family...</p>
                    </div>
                </div>
                <div class="car-item bg-gray-700 rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105">
                    <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/aventador/2023/02_09_refresh/aven_gate_03.jpg" alt="Car 2" class="w-full h-48 object-cover">
                    <div class="car-item-content p-4">
                        <h3 class="text-2xl font-bold text-yellow-500">Aventador</h3>
                        <p class="mt-2 text-gray-400">Designed to push beyond performance...</p>
                    </div>
                </div>
                <!-- Add more car items as needed -->
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 KRCars. All rights reserved.</p>
    </footer>
</body>
</html>
