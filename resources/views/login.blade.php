<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Login Page</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('login.post') }}" method="POST">
        {{-- Uncomment the line below if you want to use CSRF protection --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{-- If you are using Laravel 8 or later, you can use the Blade directive --}}
        @csrf
        <div>
            <label for="username">username:</label>
            <input type="username" id="username" name="username" value="{{ old('username') }}">
            {{-- Display error message for username --}}
            @error('username')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            {{-- Display error message for email --}}
        </div>
        <br>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}">
            {{-- Display error message for password --}}
        </div>
        <br>
        <button type="submit">submit</button>
    </form>

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif
</body>

</html>
