<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Favorite Movies/Series') }}
        </h2>
    </x-slot>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        
    <style>
        .header-bg {
            background-image: url('https://boldcontentvideo.com/wp-content/webpc-passthru.php?src=https://boldcontentvideo.com/wp-content/uploads/2018/01/noom-peerapong-30948-1080x675.jpg&nocache=1');
            background-size: cover;
            background-position: center;
            color: white;
        }
    </style>

    <header class="header-bg text-center py-12">
        <h1 class="text-4xl font-bold">My Favorite Movies/Series</h1>
        <p class="mt-4 text-lg">Here are the list of my favorite movies and series.</p>
    </header>

    <div class="container mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Movies/Series List</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Check out your favorite movies and series here!</p>
            </div>
            <div class="border-t border-gray-200">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
                    <!-- Fast & Furious Movies -->
                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col items-center">
                        <img src="https://m.media-amazon.com/images/M/MV5BNzlkNzVjMDMtOTdhZC00MGE1LTkxODctMzFmMjkwZmMxZjFhXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_FMjpg_UX1000_.jpg" alt="The Fast and the Furious" class="w-36 h-54 mb-4 rounded-md object-cover">
                        <h4 class="text-lg font-semibold text-gray-900 text-center">The Fast and the Furious</h4>
                        <p class="text-sm text-gray-500 text-center">2001 • <span class="font-medium">6.8 IMDb</span></p>
                        <p class="mt-2 text-sm text-gray-700 text-center">The original movie that started the high-octane, adrenaline-filled franchise.</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col items-center">
                        <img src="https://m.media-amazon.com/images/M/MV5BMTUxNTk5MTE0OF5BMl5BanBnXkFtZTcwMjA2NzY3NA@@._V1_.jpg" alt="Fast Five" class="w-36 h-54 mb-4 rounded-md object-cover">
                        <h4 class="text-lg font-semibold text-gray-900 text-center">Fast Five</h4>
                        <p class="text-sm text-gray-500 text-center">2011 • <span class="font-medium">7.3 IMDb</span></p>
                        <p class="mt-2 text-sm text-gray-700 text-center">Dom and the crew find themselves on the wrong side of the law in this thrilling installment.</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col items-center">
                        <img src="https://m.media-amazon.com/images/M/MV5BMTQxOTA2NDUzOV5BMl5BanBnXkFtZTgwNzY2MTMxMzE@._V1_.jpg" alt="Furious 7" class="w-36 h-54 mb-4 rounded-md object-cover">
                        <h4 class="text-lg font-semibold text-gray-900 text-center">Furious 7</h4>
                        <p class="text-sm text-gray-500 text-center">2015 • <span class="font-medium">7.1 IMDb</span></p>
                        <p class="mt-2 text-sm text-gray-700 text-center">An action-packed sequel that includes one of the most emotional farewells in cinema.</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg shadow-md flex flex-col items-center">
                        <img src="https://m.media-amazon.com/images/M/MV5BMTQ3ODY4NzYzOF5BMl5BanBnXkFtZTgwNjI3OTE4MDE@._V1_.jpg" alt="Need for Speed" class="w-36 h-54 mb-4 rounded-md object-cover">
                        <h4 class="text-lg font-semibold text-gray-900 text-center">Need for Speed</h4>
                        <p class="text-sm text-gray-500 text-center">2014 • <span class="font-medium">6.4 IMDb</span></p>
                        <p class="mt-2 text-sm text-gray-700 text-center">A thrilling race against time that brings the popular video game franchise to life.</p>
                    </div>
                    <!-- Add more movies as needed -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
