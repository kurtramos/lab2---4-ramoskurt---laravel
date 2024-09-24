<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent A Car | KRCars</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
    <!-- Header -->
    <header class="bg-gray-900 text-white border-b-2 border-yellow-500">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-3xl font-bold text-yellow-500">KRCars</h1>


            <!-- Authentication Links -->
         @if (Route::has('login'))
                <div class="flex space-x-4 items-center">
                    <a href="{{ route('home') }}" class="text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Home</a>
                    <a href="{{ route('about') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">About</a>
                    <a href="{{ route('contact') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Contact Us</a>
                    <a href="{{ route('brand-of-cars') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Brand of Cars</a>
                    <a href="{{ route('rent-a-car') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Rent a Car</a>
                    <a href="{{ route('reviewforms') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Review Forms</a>
                    <a href="{{ route('indivpost') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Car Posts</a>
                    
                    @auth
                        <!-- Dashboard link for authenticated users -->
                        <!-- <a href="{{ url('/dashboard') }}" class="ml-4 font-semibold text-gray-600 hover:text-yellow-500">Dashboard</a> -->

                        <!-- Logout Button -->
                        <form method="POST" action="{{ route('logout') }}" class="ml-4">
                            @csrf
                            <button type="submit" class="font-semibold text-gray-600 hover:text-yellow-500 transition">
                                Log Out
                            </button>
                        </form>
                    @else
                        <!-- Login and Register Links for Guests -->
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
            <h1 class="text-4xl font-bold text-yellow-500">Rent A Car</h1>
        </div>
    </div>

    <!-- Rent A Car Section -->
    <div class="container mx-auto py-16 px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-white">
            <h1 class="text-4xl font-bold text-yellow-500 mb-6 text-center">Rent A Car</h1>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="car-item text-center bg-gray-900 rounded-lg shadow-md p-4">
                    <img src="https://media.karousell.com/media/photos/products/2022/3/3/honda_civic_sir_manual_1646286161_3f0f25b4.jpg" alt="Car 1" class="w-[1000px] h-[600px] object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold">Honda Civic SiR</h3>
                    <p class="text-yellow-500 font-semibold">Price: 2500/day</p>
                </div>
                <div class="car-item text-center bg-gray-900 rounded-lg shadow-md p-4">
                    <img src="https://content.toyota.com.ph/uploads/vehicle_features/68/005_68_1575455319295_000.png" alt="Car 2" class="w-[1000px] h-[600px] object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold">Toyota 86</h3>
                    <p class="text-yellow-500 font-semibold">Price: 5000/day</p>
                </div>
                <div class="car-item text-center bg-gray-900 rounded-lg shadow-md p-4">
                    <img src="https://cdn.topgear.es/sites/navi.axelspringer.es/public/media/image/2023/07/lamborghini-gallardo-superleggera-3095746.jpg?tf=3840x" alt="Car 3" class="w-[1000px] h-[600px] object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold">Lamborghini Gallardo</h3>
                    <p class="text-yellow-500 font-semibold">Price: 10000/day</p>
                </div>
                <!-- Add more cars as needed -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 KRCars. All rights reserved.</p>
    </footer>
</body>
</html>
