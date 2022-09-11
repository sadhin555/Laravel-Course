<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>
<body>

    <h1>Admin Login</h1>
    <form action="{{ route('admin.authenticate') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="email" value="{{ old('old') }}">
        @error("email")
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="password" name="password" placeholder="password" value="{{ old('password') }}">
        @error("password")
        <span>{{ $message }}</span>
        @enderror
        <br>
        <button>Login</button>
    </form>
</body>
</html>
