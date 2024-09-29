<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <!-- Welcome {{$name}} -->

<!-- @if($name == "kurt"){
<h1>User List</h1>
}
@endif -->

<!-- @php
$i = 0;
@endphp -->

    <h1>User List</h1>

    <table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Created at</th>
        <!-- <th>Pass</th> -->
        </tr>

        @foreach ($users as $user)

        @endforeach
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <!-- <td>{{$user->password}}</td> -->
        </tr>
    </table>
</body>
</html>