<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required>
            @error('username')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Login</button>
    </form>
</body>

</html>
