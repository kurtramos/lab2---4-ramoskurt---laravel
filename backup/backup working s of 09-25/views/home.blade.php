<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Roles | KRCars</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white flex flex-col min-h-full">
    <!-- Header -->
    <header class="bg-gray-900 text-white border-b-2 border-yellow-500">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-3xl font-bold text-yellow-500">KRCars</h1>
            <nav class="flex space-x-4">
                <!-- <a href="{{ route('home') }}" class="text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Home</a>
                <a href="{{ route('about') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">About</a>
                <a href="{{ route('contact') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Contact Us</a>
                <a href="{{ route('brand-of-cars') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Brand of Cars</a>
                <a href="{{ route('rent-a-car') }}" class="ml-4 text-gray-500 hover:text-yellow-500 hover:border-yellow-500 transition">Rent a Car</a> -->
                <!-- <a href="{{ route('login') }}" class="mt-6 inline-block font-semibold text-gray-600 hover:text-yellow-500 transition duration-300 ease-in-out bg-gray-900 hover:bg-gray-700 px-6 py-3 rounded text-lg">Log in</a> -->
                @auth
    @if (auth()->user()->role === 'admin')
        <a href="{{ url('admin/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
    @else
        <a href="{{ url('user/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
    @endif
@else
    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
    @endif
@endauth

                </div>

            </nav>
        </div>
    </header>

    <!-- Main Content with Flex-Grow to Fill Space -->
    <div class="flex-grow">
        <div class="relative bg-black text-center text-white py-16">
            <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/huracan/2023/09_18_refresh/gallery/gw_hura_01.jpg" alt="Hero Car" class="absolute inset-0 w-full h-full object-cover object-center opacity-40">
            <div class="relative z-10">
                <h2 class="text-4xl font-bold text-yellow-500">Understanding User & Admin Roles</h2>
                <p class="text-xl mt-4">Learn about the different capabilities of each account type.</p>
            </div>
        </div>

        <!-- Additional Content Section -->
        <div class="container mx-auto py-16 px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- User Account -->
                <div class="bg-gray-800 rounded-lg p-8">
                    <h3 class="text-3xl font-bold text-yellow-500 mb-4">User Account</h3>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Access to personal profile settings.</li>
                        <li>Can view available cars and make reservations.</li>
                        <li>Receive updates and promotions.</li>
                        <li>Submit feedback and contact support.</li>
                    </ul>

                     <!-- User Login Button -->
            @auth
                @if (auth()->user()->role === 'user')
                    <a href="{{ url('user/dashboard') }}" class="mt-6 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        User Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="mt-6 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        User Login
                    </a>
                @endif
            @else
                <a href="{{ route('login') }}" class="mt-6 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    User Login
                </a>
            @endauth
        </div>
                    
     
                <!-- Admin Account -->
                <div class="bg-gray-800 rounded-lg p-8">
                    <h3 class="text-3xl font-bold text-yellow-500 mb-4">Admin Account</h3>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Full access to the backend dashboard.</li>
                        <li>Manage user accounts and roles.</li>
                        <li>Update car listings and availability.</li>
                        <li>Access to detailed reports and analytics.</li>
                    </ul>
       <!-- Admin Login Button -->
       @auth
                @if (auth()->user()->role === 'admin')
                    <a href="{{ url('admin/dashboard') }}" class="mt-6 inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Admin Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="mt-6 inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Admin Login
                    </a>
                @endif
            @else
                <a href="{{ route('login') }}" class="mt-6 inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Admin Login
                </a>
            @endauth
        </div>
    </div>
</div>
</div>

    <!-- Static Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 KRCars. All rights reserved.</p>
    </footer>
</body>
</html>
