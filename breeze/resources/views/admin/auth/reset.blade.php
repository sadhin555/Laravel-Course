<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Reset Password</title>
</head>
<body>

    <h1>Admin Reset Password</h1>
    <form action="{{ route('admin.reset.pass') }}" method="POST">
        @csrf
        {{-- @php
            dd(request()->email)
        @endphp --}}
        <input type="hidden" value="{{ request()->token }}" name="token">
        <input type="text" name="email" placeholder="email" value="{{ request()->email }}" readonly>
        @error("email")
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="password" name="password" placeholder="password" value="{{ old('password') }}">
        @error("password")
        <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="password" name="password_confirmation" placeholder="Confirmation" value="{{ old('password') }}">
        <br>
        <button>Reset Password</button>
    </form>
    <a href="{{ route('admin.forget') }}">Forget Password</a>
</body>
</html>
