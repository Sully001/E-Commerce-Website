@extends('layouts.layout')

@section('content')

    <h1 class="all-products-title">All Products</h1>


    <div class="all-products">
    @foreach ($products as $product)
        <a href="/products/{{ $product->ProductID }}">
            <div>
                <img src="{{ $product->product_image}}" alt="This products image" height="200px" width="200px">
                <p><strong>{{ $product->ProductName }}</strong></p>
                <p>£{{ $product->Price}}</p>
                
                @if ($product->Quantity > 0)
                    <p>In Stock</p>
                @else
                    <p>Out of Stock</p>
                @endif
            </div>
        </a>
    @endforeach
    </div>
@endsection