<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>


    <h1>User List</h1>

    <table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Created at</th>
        <th>Pass</th>
        </tr>

        @foreach ($users as $user)
  
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->password}}</td>
        </tr>
    </table>
    @endforeach
</body>
</html> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
            {{ __('Dashboard') }} {{Auth::user()->name}}
        </h2>
    </x-slot>

            <!-- Tailwind CSS CDN -->
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
                <table class="table">
                    <thead>
                        <tr>
                            <th> scope="col">#</th>
                            <th> scope="col">Name</th>
                            <th> scope="col">Email</th>
                            <th> scope="col">Create_at</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php $i = 1?>
                      @foreach ($users as $user)
  
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>


