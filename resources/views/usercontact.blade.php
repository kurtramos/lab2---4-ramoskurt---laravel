<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | KRCars</title>
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
            <h1 class="text-4xl font-bold text-yellow-500">Contact Us</h1>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container mx-auto py-16 px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-white">
            <h1 class="text-4xl font-bold text-yellow-500 mb-6 text-center">Contact Us</h1>
            <div class="flex flex-col items-center">
                <div class="text-center mb-8">
                    <p class="mb-4">For inquiries, please reach out to us at <a href="mailto:info@krcars.com" class="text-yellow-500 hover:underline">info@krcars.com</a> or call us at <a href="tel:+123456789" class="text-yellow-500 hover:underline">+123456789</a>.</p>
                </div>
                <div class="contact-form w-full max-w-lg">
                    <h2 class="text-2xl font-bold text-yellow-500 mb-4">Get in Touch</h2>
                    <form action="#" method="post" class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-900 text-white" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-900 text-white" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium">Message</label>
                            <textarea id="message" name="message" rows="6" class="w-full px-4 py-2 border border-gray-700 rounded-lg bg-gray-900 text-white" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-yellow-500 text-black font-bold py-2 px-4 rounded hover:bg-yellow-600">Send Message</button>
                    </form>
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
