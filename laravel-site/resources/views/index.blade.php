@extends('layouts.layout')

@section('content')
<div class="all-products">
@foreach ($products as $product)
    <a href="/products/{{ $product->product_id }}">
        <div>
            <img src="{{ $product->product_image}}" alt="This products image" height="200px" width="200px">
            <p><strong>{{ $product->name }}</strong></p>
            <p>£{{ $product->price}}</p>
            
            @if ($product->quantity > 0)
                <p>In Stock</p>
            @else
                <p>Out of Stock</p>
            @endif
        </div>
    </a>
@endforeach
</div>
@endsection