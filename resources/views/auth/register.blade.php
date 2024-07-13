<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>Register</h1>
    <form method="POST" action="{{ route('register') }}">
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
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>
    <a href="{{ route('login') }}">Already have an account? Login here</a>
</body>

</html>
