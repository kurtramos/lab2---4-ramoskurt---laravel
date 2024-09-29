<!-- add-post-admin.blade.php -->

<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white flex flex-col min-h-full">
    <header class="bg-gray-900 text-white border-b-2 border-yellow-500">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-3xl font-bold text-yellow-500">Admin - Add Post</h1>
        </div>
    </header>

    <div class="container mx-auto py-16 px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-white">
            <h2 class="text-3xl font-bold text-yellow-500 mb-6">Add New Post</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-white mb-2" for="title">Title</label>
                    <input type="text" id="title" class="w-full px-4 py-2 bg-gray-900 text-white border-gray-600 rounded-lg">
                </div>
                <div class="mb-4">
                    <label class="block text-white mb-2" for="content">Content</label>
                    <textarea id="content" rows="5" class="w-full px-4 py-2 bg-gray-900 text-white border-gray-600 rounded-lg"></textarea>
                </div>
                <button type="submit" class="bg-yellow-500 text-black px-6 py-2 rounded-lg hover:bg-yellow-600">Submit</button>
            </form>
        </div>
    </div>

    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 Admin Panel. All rights reserved.</p>
    </footer>
</body>
</html>
