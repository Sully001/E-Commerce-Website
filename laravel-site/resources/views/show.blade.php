@extends('layouts.layout')


@section('content')
<h1>This will show a single product on the page</h1>
<img src="{{ $product->product_image }}" alt="Product Image" height="200px" width="200px">
<h3>{{ $product->name}}</h3>
<p><strong>Price - {{ $product->price }}</strong></p>

@if ($product->quantity > 0)
    <p>In Stock</p>
    @else
    <p>Out of Stock</p>
@endif

<h3>Description</h3>
<p>{{ $product->description }}</p>

@endsection