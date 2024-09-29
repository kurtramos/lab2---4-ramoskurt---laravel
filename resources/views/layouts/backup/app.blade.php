<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KRCars') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="bg-black text-white">
    <x-banner />

    <!-- Header -->
    <header class="bg-gray-900 text-white border-b-2 border-yellow-500">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-3xl font-bold text-yellow-500">{{ config('app.name', 'KRCars') }}</h1>
           
            <nav class="flex space-x-4">
    <a href="{{ route('admin.dashboard') }}" class="text-white hover:text-yellow-500">Dashboard</a>
    <a href="{{ route('profile') }}" class="text-white hover:text-yellow-500">Profile</a>
    <a href="{{ route('hobbies') }}" class="text-white hover:text-yellow-500">Hobbies</a>
    <a href="{{ route('favorite-movies') }}" class="text-white hover:text-yellow-500">Favorite Movies</a>
    <a href="{{ route('owned-cars') }}" class="text-white hover:text-yellow-500">Owned Cars</a>
    <a href="{{ route('quotation-for-car-rent') }}" class="text-white hover:text-yellow-500">Quotation for Car Rent</a>
    <a href="{{ route('listcars') }}" class="text-white hover:text-yellow-500">Listed Cars</a>
    <a href="{{ route('cars.all') }}" class="text-white hover:text-yellow-500">Cars</a>


</nav>


               
            <!-- Authentication Links -->
            <!-- @if (Route::has('login'))
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
            @endif -->
        
        <!-- Settings Dropdown -->
        <div class="relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-gray-900 hover:text-yellow-500 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                                 @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </nav>

    </header>
    

    <!-- Hero Section -->
    <div class="hero relative text-center text-white">
        <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/model_gw/huracan/2023/09_18_refresh/gallery/gw_hura_01.jpg" alt="Hero Car" class="w-full h-auto brightness-60">
        <div class="hero-content absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-60">
            <!-- <h1 class="text-4xl font-bold text-yellow-500">{{ $header ?? 'Welcome to KRCars' }}</h1> -->
            <main class="container mx-auto py-16 px-6 lg:px-8">
            {{ $slot }}
        </main>
        </div>
    </div>

  

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 KRCars. All rights reserved.</p>
    </footer>

    @stack('modals')
    @livewireScripts
</body>
</html>

