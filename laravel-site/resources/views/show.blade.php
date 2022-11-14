@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/show.css" type="text/css">
@endsection

@section('content')
<div class="product-container">
    <p class="product-name">{{$product->ProductName}}</p>
    <div class="product-main">
        <div class="section-left">
            <img src="{{ asset('storage/'.$product->ImageURL) }}" alt="Product Image" height="200px" width="200px">
            <h4>Price: {{ $product->Price }}</h4>
        </div>
        
        <div class="section-right">
            <h4>Features</h4>
            <p>{{ $product->Description }}</p>

            @if ($product->Quantity > 0)
                <h4>In Stock</h4>
            @else
                <h4>Out of Stock</h4>
            @endif
        </div>
        
    </div>
    
</div>
@endsection