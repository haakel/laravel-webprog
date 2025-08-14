@extends('layouts.master')
@section('titel')
    home page
@endsection

@section('content')

    <body>
        <h1>Home Page</h1>
        <p>Welcome to the home page of our application.</p>
    </body>
    {{-- <ul>
        @foreach ($blogs as $blog)
            @if ($blog['status'] == '1')
                <li>
                    <h2>{{ $blog['title'] }}</h2>
                    <p>{{ $blog['content'] }}</p>
                </li>
            @else
                <li>
                    <h2>{{ $blog['title'] }}</h2>
                    <p>This blog is not available.</p>
            @endif
        @endforeach
    </ul> --}}

    {{-- <ul>
        @for ($i = 0; $i < count($blogs); $i++)
            <li>
                <h2>{{ $blogs[$i]['title'] }}</h2>
                <p>{{ $blogs[$i]['content'] }}</p>
            </li>
        @endfor
    </ul> --}}
@endsection
