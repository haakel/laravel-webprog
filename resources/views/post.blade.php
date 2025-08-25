<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('layouts.haeder')
    <h1>Post Page</h1>
    <p>Welcome to the post page!</p>

    @if (isset($posts))
        <ul>
            @foreach ($posts as $p)
                {{-- <li>{{ $p->title }} - {{ $p->content }}</li> --}}
                <li>{{ $p->title }}</li>
            @endforeach
        </ul>
    @else
        <p>No posts available.</p>
    @endif

    @include('layouts.footer')
</body>

</html>
