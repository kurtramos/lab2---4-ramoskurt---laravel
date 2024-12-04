<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Car') }}
        </h2>
    </x-slot>

    <!-- Tailwind CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="{{ route('cars.update', $car->id) }}">
                    @csrf
                    @method('PUT') -->

                    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- @if (session('success'))
                    <div class="bg-green-500 text-white p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-red-500 text-white p-4 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
                <form method="POST" action="{{ url('cars/update/' . $car->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="mb-4">
                        <label for="brand" class="block text-gray-700 text-sm font-bold mb-2">Brand:</label>
                        <input type="text" name="brand" id="brand" value="{{ $car->brand }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="mb-4">
                        <label for="series" class="block text-gray-700 text-sm font-bold mb-2">Series:</label>
                        <input type="text" name="series" id="series" value="{{ $car->series }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="mb-4">
                        <label for="color" class="block text-gray-700 text-sm font-bold mb-2">Color:</label>
                        <input type="text" name="color" id="color" value="{{ $car->color }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="mb-4">
                        <label for="price_per_day" class="block text-gray-700 text-sm font-bold mb-2">Price Per Day:</label>
                        <input type="number" name="price_per_day" id="price_per_day" value="{{ $car->price_per_day }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="mb-4">
                        <label for="details" class="block text-gray-700 text-sm font-bold mb-2">Details:</label>
                        <textarea name="details" id="details" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $car->details }}</textarea>
                    </div>

                   <!-- image source dropdown -->
                   <div class="mb-4">
                        <label for="imageType" class="block text-gray-700 text-sm font-bold mb-2">Choose Image Source:</label>
                        <select name="imageType" id="imageType" onchange="toggleImageInput()" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="file" {{ old('imageType', 'file') == 'file' ? 'selected' : '' }}>Image Upload</option>
                            <option value="url" {{ old('imageType') == 'url' ? 'selected' : '' }}>Image URL</option>
                        </select>
                    </div>

                    <!-- file upload input -->
                    <div class="mb-4" id="file-upload-container" style="display: {{ old('imageType', 'file') == 'file' ? 'block' : 'none' }};">
                        <label for="imageFile" class="block text-gray-700 text-sm font-bold mb-2">Upload Image:</label>
                        <input type="file" name="imageFile" id="imageFile" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @if ($car->image && filter_var($car->image, FILTER_VALIDATE_URL) === false)
                            <img src="{{ asset($car->image) }}" alt="Car Image" class="mt-2 w-20 h-20 object-cover rounded">
                        @endif
                        @error('imageFile')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- image url input -->
                    <div class="mb-4" id="url-upload-container" style="display: {{ old('imageType') == 'url' ? 'block' : 'none' }};">
                        <label for="imageUrl" class="block text-gray-700 text-sm font-bold mb-2">Enter Image URL:</label>
                        <input type="url" name="imageUrl" id="imageUrl" value="{{ old('imageUrl', $car->image) }}" placeholder="https://example.com/image.jpg" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @if ($car->image && filter_var($car->image, FILTER_VALIDATE_URL))
                            <img src="{{ $car->image }}" alt="Car Image" class="mt-2 w-20 h-20 object-cover rounded">
                        @endif
                        @error('imageUrl')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <script>
                        //  toggle the visibility of the input fields based on the selected image source
                        function toggleImageInput() {
                            var imageType = document.getElementById("imageType").value;
                            var fileUploadContainer = document.getElementById("file-upload-container");
                            var urlUploadContainer = document.getElementById("url-upload-container");
                            
                            // show relevant input field based on the selected image type
                            if (imageType === "file") {
                                fileUploadContainer.style.display = "block";
                                urlUploadContainer.style.display = "none";
                                // clear  URL field if it was visible
                                document.getElementById("imageUrl").value = "";
                            } else {
                                fileUploadContainer.style.display = "none";
                                urlUploadContainer.style.display = "block";
                                // Clear the file input if it was visible
                                document.getElementById("imageFile").value = "";
                            }
                        }

                        // initialize the visibility on page load based on the selected value
                        document.addEventListener('DOMContentLoaded', function () {
                            toggleImageInput();
                        });
                    </script>


                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Update Car
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>