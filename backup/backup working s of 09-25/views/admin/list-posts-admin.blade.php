<!-- list-posts-admin.blade.php -->

<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - List Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white flex flex-col min-h-full">
    <header class="bg-gray-900 text-white border-b-2 border-yellow-500">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-3xl font-bold text-yellow-500">Admin - List Posts</h1>
        </div>
    </header>

    <div class="container mx-auto py-16 px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-white">
            <h2 class="text-3xl font-bold text-yellow-500 mb-6">Posts</h2>
            <table class="min-w-full table-auto bg-gray-700">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Author</th>
                        <th class="px-4 py-2">Created At</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example row -->
                    <tr class="bg-gray-600">
                        <td class="border px-4 py-2">Sample Post</td>
                        <td class="border px-4 py-2">John Doe</td>
                        <td class="border px-4 py-2">2024-09-18</td>
                        <td class="border px-4 py-2">
                            <a href="#" class="text-yellow-500 hover:text-white">Edit</a>
                            |
                            <a href="#" class="text-red-500 hover:text-white">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 Admin Panel. All rights reserved.</p>
    </footer>
</body>
</html>
