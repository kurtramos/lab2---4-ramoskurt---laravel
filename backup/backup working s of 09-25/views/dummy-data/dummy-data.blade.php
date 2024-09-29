<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy Data | KRCars</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
    <!-- Header -->
    <header class="bg-gray-900 text-white border-b-2 border-yellow-500">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-3xl font-bold text-yellow-500">KRCars</h1>
            <nav class="flex space-x-4">
                <a href="{{ route('dashboard') }}" class="text-white hover:text-yellow-500">Dashboard</a>
                <a href="{{ route('profile') }}" class="text-white hover:text-yellow-500">Profile</a>
                <a href="{{ route('hobbies') }}" class="text-white hover:text-yellow-500">Hobbies</a>
                <a href="{{ route('favorite-movies') }}" class="text-white hover:text-yellow-500">Favorite Movies</a>
                <a href="{{ route('owned-cars') }}" class="text-white hover:text-yellow-500">Owned Cars</a>
                <a href="{{ route('quotation-for-car-rent') }}" class="text-white hover:text-yellow-500">Quotation for Car Rent</a>
                <a href="{{ route('dummy-data') }}" class="text-white hover:text-yellow-500">Dummy Data</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto py-16 px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-white">
            <h1 class="text-4xl font-bold text-yellow-500 mb-6 text-center">Dummy Data</h1>
            <table class="min-w-full bg-gray-700 rounded-lg">
                <thead>
                    <tr class="bg-gray-900 text-yellow-500">
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4">Email</th>
                        <th class="py-2 px-4">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr class="border-b border-gray-600">
                            <td class="py-2 px-4">{{ $item['name'] }}</td>
                            <td class="py-2 px-4">{{ $item['email'] }}</td>
                            <td class="py-2 px-4">{{ $item['phone'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 KRCars. All rights reserved.</p>
    </footer>
</body>
</html>
