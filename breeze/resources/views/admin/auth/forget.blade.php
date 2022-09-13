<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Forget Password</title>
</head>
<body>

    <h1>Admin Forget Password</h1>
    <form action="{{ route('admin.send-forget') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="email" value="{{ old('old') }}">
        @error("email")
            <span>{{ $message }}</span>
        @enderror
      <br>
        <button>Send Reset Link</button>
    </form>
    <a href="{{ route('admin.login') }}">Login</a>
</body>
</html>
