<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, {{ $username }}</h1>
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>