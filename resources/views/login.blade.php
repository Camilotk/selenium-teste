<!doctype html>
<html>

<head>
    <title>Look at me Login</title>
</head>

<body>
    <h1>Login</h1>
<form action="{{ route('doLogin') }}" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Send</button>
    </form>
</body>

</html>
