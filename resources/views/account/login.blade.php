<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    @if(session('error'))
        {{session('error')}}
    @endif

    <h1>Login</h1>
    <form method="POST" action="{{route('login')}}">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
    </div>
    </form>
</body>

</html>
