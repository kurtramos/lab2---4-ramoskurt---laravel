<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hobbies') }}
        </h2>
    </x-slot>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <style>
        .header-bg {
            background-image: url('https://img.freepik.com/premium-photo/world-photography-day-vintage-camera-background-professional-hobby-header-banner_868611-2808.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }
    </style>

    <header class="header-bg text-center py-12">
        <h1 class="text-4xl font-bold">My Hobbies</h1>
        <p class="mt-4 text-lg">This page is only accessible to logged-in users. Here, are my hobbies.</p>
    </header>
    
    <div class="container mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Hobbies List</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Share your favorite hobbies and find new ones!</p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <!-- Example Hobby Item -->
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Photography</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Capturing moments and creating memories with a camera.</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Gardening</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Cultivating plants and flowers in your garden or home.</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Cooking</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Experimenting with new recipes and enjoying homemade meals.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-app-layout>
