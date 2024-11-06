<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Car') }}
        </h2>
    </x-slot>

        <!-- Tailwind CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

            <!-- display all error -->
            <!-- @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif -->


                <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">User ID:</label>
                        <select name="user_id" id="user_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('user_id') border-red-500 @enderror">
                            <option value="">Select User</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->email }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="brand" class="block text-gray-700 text-sm font-bold mb-2">Brand:</label>
                        <input type="text" name="brand" id="brand" value="{{ old('brand') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('brand') border-red-500 @enderror">
                        @error('brand')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="series" class="block text-gray-700 text-sm font-bold mb-2">Series:</label>
                        <input type="text" name="series" id="series" value="{{ old('series') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('series') border-red-500 @enderror">
                        @error('series')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="color" class="block text-gray-700 text-sm font-bold mb-2">Color:</label>
                        <input type="text" name="color" id="color" value="{{ old('color') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('color') border-red-500 @enderror">
                        @error('color')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="price_per_day" class="block text-gray-700 text-sm font-bold mb-2">Price Per Day:</label>
                        <input type="number" name="price_per_day" id="price_per_day" value="{{ old('price_per_day') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price_per_day') border-red-500 @enderror">
                        @error('price_per_day')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="details" class="block text-gray-700 text-sm font-bold mb-2">Details:</label>
                        <textarea name="details" id="details" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('details') border-red-500 @enderror">{{ old('details') }}</textarea>
                        @error('details')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- imagetype -->
                    <div class="mb-4">
                        <label for="imageType" class="block text-gray-700 text-sm font-bold mb-2">Choose Image Source:</label>
                        <select name="imageType" id="imageType" onchange="toggleImageInput()" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <option value="file" {{ old('imageType') === 'file' ? 'selected' : '' }}>Upload Image</option>
                            <option value="url" {{ old('imageType') === 'url' ? 'selected' : '' }}>Image URL</option>
                        </select>
                        @error('imageType')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4" id="fileInput" style="display: {{ old('imageType') === 'file' ? 'block' : 'none' }};">
                        <label for="imageFile" class="block text-gray-700 text-sm font-bold mb-2">Upload Image:</label>
                        <input type="file" name="imageFile" id="imageFile" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('imageFile')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4" id="urlInput" style="display: {{ old('imageType') === 'url' ? 'block' : 'none' }};">
                        <label for="imageUrl" class="block text-gray-700 text-sm font-bold mb-2">Image URL:</label>
                        <input type="text" name="imageUrl" id="imageUrl" value="{{ old('imageUrl') }}" placeholder="https://example.com/image.jpg" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('imageUrl')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Add Car
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleImageInput() {
            var type = document.getElementById("imageType").value;
            document.getElementById("fileInput").style.display = (type === "file") ? "block" : "none";
            document.getElementById("urlInput").style.display = (type === "url") ? "block" : "none";
        }

        // Set the initial visibility of file or URL input based on the old value
        document.addEventListener('DOMContentLoaded', function() {
            toggleImageInput();
        });

        function validateForm() {
            const imageType = document.getElementById("imageType").value;
            if (imageType === 'file' && !document.getElementById("imageFile").value) {
                alert("Please upload an image file.");
                return false;
            }
            if (imageType === 'url' && !document.getElementById("imageUrl").value) {
                alert("Please enter a valid image URL.");
                return false;
            }
            return true;
        }
    </script>
</x-app-layout>