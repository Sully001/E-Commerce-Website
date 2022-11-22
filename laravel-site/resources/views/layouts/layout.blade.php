<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    @yield('css')
    <!-- Styles -->
</head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <div class="navbar bg-dark">
            
            <a href="/welcome" class="unique"><p class="name" id="site-name">Hardware28</p></a>    
            <ul class="navbar-options">
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
            <div class="navbar-login-signup">
                @if (Auth::check())
                <a href="/basket" class="navbar-login-link"><button class="btn btn-primary">Basket</button></a>
                <a href="/login" class="navbar-login-link"><button class="btn btn-primary">Log Out</button></a>
                @else
                <a href="/login" class="navbar-login-link"><button class="btn btn-primary">Log In</button></a>
                <a href="/signup" class="navbar-signup-link"><button class="btn btn-primary">Sign Up</button></a>
                @endif
            </div>
        </div>
        @yield('content')
    </body>
</html>