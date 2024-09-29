<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy Data List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">Dummy Data List</h1>

        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200">ID</th>
                    <th class="py-2 px-4 bg-gray-200">Name</th>
                    <th class="py-2 px-4 bg-gray-200">Email</th>
                    <th class="py-2 px-4 bg-gray-200">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dummyData as $index => $data)
                    <tr>
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $data['name'] }}</td>
                        <td class="border px-4 py-2">{{ $data['email'] }}</td>
                        <td class="border px-4 py-2">{{ $data['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
