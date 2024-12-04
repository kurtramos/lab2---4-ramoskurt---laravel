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

        table th {
            background-color: #4a5568; /* Dark background for headers */
            color: white; /* White text for headers */
            padding: 12px;
            text-align: left;
        }

        table td {
            background-color: #f7fafc; /* Light background for rows */
            color: #2d3748; /* Dark text for rows */
            padding: 12px;
        }

        table tr:nth-child(even) {
            background-color: #edf2f7; /* Alternating row color */
        }

        .actions a {
            padding: 8px;
            border-radius: 5px;
        }

        .text-red-600 {
            color: #e53e3e;
        }

        .text-green-600 {
            color: #38a169;
        }

        .text-indigo-600 {
            color: #5a67d8;
        }
    </style>

    <!-- <header class="header-bg text-center py-12">
        <h1 class="text-4xl font-bold">List of Cars</h1>
        <p class="mt-4 text-lg">Here are the cars currently available in our database.</p>
    </header> -->

    <div class="container mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6 text-center">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Cars List</h3>
                <!-- <p class="mt-1 max-w-2xl text-sm text-gray-500 mx-auto">Details of all the cars listed in our database.</p> -->

                <!-- success message -->
                @if (session('success'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4 relative">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="absolute top-0 right-0 mt-1 mr-1 text-white" onclick="this.parentElement.style.display='none'">
                            &times;
                        </button>
                    </div>
                @endif

                <!-- edit success message -->
                @if (session('edit_success'))
                    <div class="bg-blue-500 text-white p-4 rounded mb-4 relative">
                        <strong>{{ session('edit_success') }}</strong>
                        <button type="button" class="absolute top-0 right-0 mt-1 mr-1 text-white" onclick="this.parentElement.style.display='none'">
                            &times;
                        </button>
                    </div>
                @endif

                <!-- soft delete -->
                @if (session('soft_delete'))
                    <div class="bg-blue-500 text-white p-4 rounded mb-4 relative">
                        <strong>{{ session('soft_delete') }}</strong>
                        <button type="button" class="absolute top-0 right-0 mt-1 mr-1 text-white" onclick="this.parentElement.style.display='none'">
                            &times;
                        </button>
                    </div>
                @endif

                <!-- Permanent Delete Message -->
                @if (session('permanent_delete'))
                    <div class="bg-red-500 text-white p-4 rounded mb-4 relative">
                        <strong>{{ session('permanent_delete') }}</strong>
                        <button type="button" class="absolute top-0 right-0 mt-1 mr-1 text-white" onclick="this.parentElement.style.display='none'">
                            &times;
                        </button>
                    </div>
                @endif
            </div>


            <!-- Add Car Button -->
            <a href="{{ route('addcar') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
                Add New Car
            </a>

            <!-- Active Cars Table -->
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="overflow-x-auto">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User ID</th>
                                        <th>Brand</th>
                                        <th>Series</th>
                                        <th>Color</th>
                                        <th>Price Per Day</th>
                                        <th>Details</th>
                                        <th>Image</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cars as $car)
                                    <tr>
                                        <td>{{ $car->id }}</td>
                                        <td>{{ $car->user ? $car->user->email : 'No user assigned' }}</td>
                                        <td>{{ $car->brand }}</td>
                                        <td>{{ $car->series }}</td>
                                        <td>{{ $car->color }}</td>
                                        <td>{{ $car->price_per_day }}</td>
                                        <td>{{ $car->details }}</td>
                                        <td>
                                            @if ($car->image)
                                                @if (filter_var($car->image, FILTER_VALIDATE_URL))
                                                    <img src="{{ $car->image }}" alt="Car Image" class="w-20 h-20 object-cover rounded">
                                                @else
                                                    <img src="{{ asset($car->image) }}" alt="Car Image" class="w-20 h-20 object-cover rounded">
                                                @endif
                                            @else
                                                <p>No Image</p>
                                            @endif
                                        </td>
                                        <td>{{ $car->created_at }}</td>
                                        <td>{{ $car->updated_at }}</td>
                                        <td class="actions">
                                            <a href="{{ route('cars.edit', $car->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                                Edit
                                            </a>
                                            <form action="{{ route('cars.delete', $car->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Soft Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            {{ $cars->links() }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trashed Cars Table -->
            <!-- <div class="py-12"> -->
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <h3 class="text-lg font-medium leading-6 text-gray-900 mb-4">Trashed Cars</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User ID</th>
                                        <th>Brand</th>
                                        <th>Series</th>
                                        <th>Color</th>
                                        <th>Price Per Day</th>
                                        <th>Details</th>
                                        <th>Image</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trashedCars as $car)
                                    <tr>
                                        <td>{{ $car->id }}</td>
                                        <td>{{ $car->user ? $car->user->email : 'No user assigned' }}</td>
                                        <td>{{ $car->brand }}</td>
                                        <td>{{ $car->series }}</td>
                                        <td>{{ $car->color }}</td>
                                        <td>{{ $car->price_per_day }}</td>
                                        <td>{{ $car->details }}</td>
                                        <td>
                                            @if ($car->image)
                                                @if (filter_var($car->image, FILTER_VALIDATE_URL))
                                                    <img src="{{ $car->image }}" alt="Car Image" class="w-20 h-20 object-cover rounded">
                                                @else
                                                    <img src="{{ asset($car->image) }}" alt="Car Image" class="w-20 h-20 object-cover rounded">
                                                @endif
                                            @else
                                                <p>No Image</p>
                                            @endif
                                        </td>
                                        <td>{{ $car->created_at }}</td>
                                        <td>{{ $car->updated_at }}</td>
                                        <td>
                                            <form action="{{ route('cars.restore', $car->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="text-green-600 hover:text-green-900">Restore</button>
                                            </form>
                                            <form action="{{ route('cars.forceDelete', $car->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Permanently Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            {{ $trashedCars->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
