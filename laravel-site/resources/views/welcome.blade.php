@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/welcome.css" type="text/css">
@endsection

@section('content')
<div class="container">
    <div class="product">
      <h1>Welcome to Hardware28</h1>
      <a href="products" style="text-decoration: none;"><productRedirect>View our Products</productRedirect></a>
  </div>  
</div>
@endsection