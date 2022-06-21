<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- @include("inc.navber") --}}

    @includeIf("inc.navber")
    {{ $title }}
    {!!$html !!}

@auth

@endauth
@can()

@endcan
@production

@endproduction

@push()

@endpush

    @if ($isActive)
    condition fullfilled
    {{-- @elseif ()
    @elseif ()
    @elseif ()
    @elseif () --}}
    @else
    condition not fullfilled
    @endif

    @php
        $i = 2;
    @endphp

    @switch($i)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break

    @default
        Default case...
@endswitch

<br><br>
@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }} <br>
@endfor
<br><br>

@foreach ($users as $user)
    {{ $user->name }} <br>
 @endforeach
</body>
</html>
