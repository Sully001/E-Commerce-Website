@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/welcome.css" type="text/css">
@endsection

@section('content')
<div class="Welcome">
    <h1>Welcome to Hardware28</h1>
</div>
    
<div class="product">
    <!-- <a href="products"><productRedirect>View our Products</productRedirect></a> -->
    <a href="products" style="text-decoration: none;"><productRedirect>View our Products</productRedirect></a>
</div>  
@endsection