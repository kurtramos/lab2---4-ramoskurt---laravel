<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand of Cars | KRCars</title>
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
            <h1 class="text-4xl font-bold text-yellow-500">Our Brands</h1>
        </div>
    </div>

    <!-- Brands Section -->
    <div class="container mx-auto py-16 px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-white">
            <h1 class="text-4xl font-bold text-yellow-500 mb-6 text-center">Our Brands</h1>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="brand-item text-center">
                    <img src="https://content.toyota.com.ph/uploads/vehicles/38/001_38_1704961009364_000.jpg" alt="Toyota" class="w-[1000px] h-[600px] object-cover rounded-lg shadow-md mb-4">
                    <p class="text-lg font-semibold">Toyota</p>
                </div>
                <div class="brand-item text-center">
                    <img src="https://images.topgear.com.ph/topgear/images/2024/08/01/1-1722486391.jpg" alt="Honda" class="w-[1000px] h-[600px] object-cover rounded-lg shadow-md mb-4">
                    <p class="text-lg font-semibold">Honda</p>
                </div>
                <div class="brand-item text-center">
                    <img src="https://cdn.motor1.com/images/mgl/qkgY2z/s3/2022-ford-everest-unofficial-rendering-by-kolesa.jpg" alt="Ford" class="w-[1000px] h-[600px] object-cover rounded-lg shadow-md mb-4">
                    <p class="text-lg font-semibold">Ford</p>
                </div>
                <!-- Add more brands as needed -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 KRCars. All rights reserved.</p>
    </footer>
</body>
</html>
