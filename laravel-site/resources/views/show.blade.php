@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/product.css" type="text/css">
@endsection

@section('content')
<div class="product">
    <p class="product-name">{{$product->ProductName}}</p>
    <div>
        <img src="{{ asset('storage/'.$product->ImageURL) }}" alt="Product Image" height="200px" width="200px">
        <h4>Price: {{ $product->Price }}</h4>

    @if ($product->Quantity > 0)
        <h4>In Stock</h4>
        @else
        <h4>Out of Stock</h4>
    @endif

    <h4>Description</h4>
    <p>{{ $product->Description }}</p>
    </div>
    
</div>
@endsection