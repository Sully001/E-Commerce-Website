@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/index.css" type="text/css">
@endsection

@section('content')
    <div class="all-products-div">
        <h1 class="all-products-title">All Products</h1>
        <p>Here are all our top products</p>
    </div>
    
    <div class="all-products">
    @foreach ($products as $product)
        <a href="{{ route('products.show', $product->ProductID) }}">
            <div class="individual-product">
                <img src="{{ asset('storage/'.$product->ImageURL) }}" alt="This products image" height="200px" width="200px">
                <p class="product-name">{{ $product->ProductName }}</p>

                <div class="price-stock">
                    <p class="product-price">£{{ $product->Price}}</p>
                    @if ($product->Quantity > 0)
                        <p class="in-stock">In Stock</p>
                    @else
                        <p class="out-stock">Out of Stock</p>
                    @endif
                </div>
                
            </div>
        </a>
    @endforeach
    </div>
@endsection