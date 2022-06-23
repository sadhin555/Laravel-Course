<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @error('name')
            {{ $message }}
        @enderror
        <input type="text" name="name" value="{{ old('name') }}"> <br><br>
        @error('email')
        {{ $message }}
    @enderror
        <input type="email" name="email" value="{{ old('email') }}"> <br><br>
        @error('password')
        {{ $message }}
    @enderror
        <input type="password" name="password"> <br><br>
        <input type="password" name="password_confirmation"> <br><br>
        <input type="number" name="number"> <br><br>
        @error('file')
        {{ $message }}
    @enderror
        <input type="file" name="file"> <br><br>
        <button>Submit</button>

    </form>
</body>
</html>
