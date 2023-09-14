<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div style="position: absolute; top: 10px; left: 95%; height:55px ; width:auto">
        
    <!-- <form action="{{route('logout')}}" method="GET">
            @csrf
            <button type="submit">Logout</button>
        </form>         -->

        <a href="{{ route('logout') }}">Logout</a>
    </div>
    <h1>Dashboard</h1>
    <table border="1px">
        <tr>
            <td>UserEmail</td>
            <td>UserName</td>
            <td>FirstName</td>
            <td>LastName</td>
            <td>Gender</td>
            <td>City</td>
        </tr>
        @foreach($userData as $user)
            <tr>
                <td>{{ $user->userEmail }}</td>
                <td>{{ $user->usernames }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->city }}</td>
            </tr>
        @endforeach
    </table>
    <button><a href="{{ route('phnbuyer') }}">Buyer Data</a></button>
</body>
</html>
