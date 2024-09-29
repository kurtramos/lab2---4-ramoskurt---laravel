<!-- individual-post-user.blade.php -->

<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white flex flex-col min-h-full">
    <header class="bg-gray-900 text-white border-b-2 border-yellow-500">
        <div class="container mx-auto flex justify-between items-center py-4">
            <h1 class="text-3xl font-bold text-yellow-500">Post Details</h1>
        </div>
    </header>

    <div class="container mx-auto py-16 px-6 lg:px-8">
        <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-white">
            <h2 class="text-3xl font-bold text-yellow-500 mb-4">Sample Post Title</h2>
            <p class="mb-4">Posted by <span class="text-yellow-500">John Doe</span> on <span class="text-yellow-500">2024-09-18</span></p>
            <p class="mb-6">This is the sample content for the post. The user can view detailed information here.</p>
            <a href="{{ route('home') }}" class="text-yellow-500 hover:text-white">Back to Posts</a>
        </div>
    </div>

    <footer class="bg-gray-900 text-white text-center py-4 border-t-2 border-yellow-500">
        <p>&copy; 2024 User Panel. All rights reserved.</p>
    </footer>
</body>
</html>
