<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Verification Notice</title>
</head>
<body>

    @if (session('status'))
        {{ session('status') }}
    @endif
    <h1>Admin Verification Notice</h1>
    <p>Your email isn't verified yet!</p>
    <form action="{{ route('admin.resend') }}" method="POST">
      @csrf
        <button>Resend Email</button>
    </form>
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button>Logout</button>
    </form>
</body>
</html>
