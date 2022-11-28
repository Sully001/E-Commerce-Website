<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- JavaScript Bundle with Popper -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css" type="text/css">
    @yield('css')
    <!-- Styles -->
</head>
    <body>
        
        <div class="navbar bg-dark">
            
            <a href="/welcome" class="unique"><p class="name" id="site-name">Hardware28</p></a>    
            <ul class="navbar-options">
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
            <div class="navbar-login-signup">
                @if (Auth::check())
                <a href="{{ route('basket', auth()->user()->id)}}" class="navbar-login-link">
                    <button class="btn btn-primary">
                        Basket
                        @if(Session::has('basket_count'))
                            <span class="badge text-bg-secondary">{{ Session::get('basket_count')}}</span>
                        @endif 
                    </button>
                </a>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Settings
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('previous.orders', auth()->user()->id) }}">Previous Orders</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                  </div>
                @else
                <a href="/login" class="navbar-login-link"><button class="btn btn-primary">Log In</button></a>
                <a href="/signup" class="navbar-signup-link"><button class="btn btn-primary">Sign Up</button></a>
                @endif
            </div>
        </div>
        @yield('content')
    </body>
</html>