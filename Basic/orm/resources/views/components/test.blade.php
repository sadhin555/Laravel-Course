<div>
    <h4>Same Data {{ $name }}</h4>
    <p>Lorem ipsum dolor sit amet.</p>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
</div>
