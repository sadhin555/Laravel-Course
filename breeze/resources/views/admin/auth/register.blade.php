<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Registration</title>
</head>
<body>

    <h1>Admin Registration</h1>
    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
        @error("name")
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
        @error("email")
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="password" name="password" placeholder="password" value="{{ old('password') }}">
        <input type="password" name="password_confirmation" placeholder="password">
        @error("password")
        <span>{{ $message }}</span>
        @enderror
        <br>
        <button>Registration</button>
    </form>
</body>
</html>
