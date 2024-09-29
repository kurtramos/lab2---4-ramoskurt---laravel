<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | KRCars</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white flex flex-col min-h-full">
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
            <h1 class="text-4xl font-bold text-yellow-500">About KRCars</h1>
        </div>
    </div>

    <!-- About Section -->
    <div class="container mx-auto py-16 px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-white">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <h2 class="text-3xl font-bold text-yellow-500 mb-4">About KRCars</h2>
                    <p class="mb-4">Welcome to KRCars, your trusted partner for car rental and sales. With a diverse fleet of vehicles and a commitment to customer satisfaction, we strive to provide a seamless and enjoyable experience for all our clients.</p>
                    <p class="mb-4">Whether you're looking for a short-term rental or a long-term purchase, KRCars has the perfect vehicle for you. Our knowledgeable staff is dedicated to helping you find the right car to meet your needs and preferences.</p>
                    <p>At KRCars, we believe in transparency and integrity, ensuring that every transaction is straightforward and hassle-free. Discover the difference with KRCars and drive away with confidence.</p>
                </div>
                <div class="w-full md:w-1/2 flex flex-col gap-4">
                    <img src="https://primer.com.ph/blog/wp-content/uploads/sites/14/2022/09/Sarah.jpg" alt="KRCars Office" class="rounded-lg shadow-md">
                    <img src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1240w,f_auto,q_auto:best/newscms/2019_13/2798361/190325-rental-cars-cs-229p.jpg" alt="Our Fleet" class="rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 KRCars. All rights reserved.</p>
    </footer>
</body>
</html>
