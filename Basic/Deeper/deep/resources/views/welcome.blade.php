<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
   <body>

        {{-- @foreach ($users as $user)
            <h5>{{ $user->name }}</h5>
        @endforeach --}}

        {{-- @php
            dd($data)
        @endphp --}}

        {{-- @foreach ($data->users as $user)

            <h4>{{ $user->name }}</h4>
        @endforeach --}}
        {{-- <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button>Submit</button>
        </form> --}}
   </body>
</html>
