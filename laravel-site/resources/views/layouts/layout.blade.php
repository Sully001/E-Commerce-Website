<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <!-- Styles -->
</head>
    <body>
        <div class="navbar">
            <p>Hardware28</p>
            <ul class="navbar-options">
                <li><a href="/products">Products</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
            <div class="navbar-login-signup">
                <a href="/login" class="navbar-login-link">Login</a>
                <a href="/signup" class="navbar-signup-link">Sign Up</a>
            </div>
            
        </div>
        @yield('content')
    </body>
</html>