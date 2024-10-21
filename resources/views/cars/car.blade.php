<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Cars') }}
            </h2>
        </div>
    </x-slot>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <style>
        .header-bg {
            background-image: url('https://www.motortrend.com/uploads/sites/5/2020/11/2021-MotorTrend-Car-of-the-Year-group-shot-1.jpg?w=768&width=768&q=75&format=webp');
            background-size: cover;
            background-position: center;
            color: white;
        }
    </style>

    <header class="header-bg text-center py-12">
        <h1 class="text-4xl font-bold">List of Cars</h1>
        <p class="mt-4 text-lg">Here are the cars currently available in our database.</p>
    </header>

    <div class="container mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6 text-center">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Cars List</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500 mx-auto">Details of all the cars listed in our database.</p>
                
                @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4 relative">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="absolute top-0 right-0 mt-1 mr-1 text-white" onclick="this.parentElement.style.display='none'">
                        &times;
                    </button>
                </div>
                @endif

                @if (session('edit_success'))
                <div class="bg-blue-500 text-white p-4 rounded mb-4 relative">
                    <strong>{{ session('edit_success') }}</strong>
                    <button type="button" class="absolute top-0 right-0 mt-1 mr-1 text-white" onclick="this.parentElement.style.display='none'">
                        &times;
                    </button>
                </div>
                @endif
            </div>

            <!-- Add Car Button -->
            <a href="{{ route('addcar') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add New Car
            </a>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                        <a href="{{ route('cars.all', ['sort' => 'id']) }}" class="hover:text-indigo-600">ID</a>
                                    </th>
                                    <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                        <a href="{{ route('cars.all', ['sort' => 'user_id']) }}" class="hover:text-indigo-600">USER ID</a>
                                    </th>
                                    <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                        Brand
                                    </th>
                                    <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                        Series
                                    </th>
                                    <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                        Color
                                    </th>
                                    <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                        Price Per Day
                                    </th>
                                    <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                        Details
                                    </th>
                                    <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                        <a href="{{ route('cars.all', ['sort' => 'created_at', 'order' => request('order') === 'asc' ? 'desc' : 'asc']) }}" class="hover:text-indigo-600">Created At</a>
                                    </th>
                                    <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                        Updated At
                                    </th>
                                    <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-500 text-left text-sm uppercase font-normal">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                        {{ $car->id }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                        {{ $car->user ? $car->user->email : 'No user assigned' }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                        {{ $car->brand }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                        {{ $car->series }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                        {{ $car->color }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                        {{ $car->price_per_day }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                        {{ $car->details }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                        {{ $car->created_at }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-500">
                                        {{ $car->updated_at }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{ route('cars.edit', $car->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="mt-4">
                            {{ $cars->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
