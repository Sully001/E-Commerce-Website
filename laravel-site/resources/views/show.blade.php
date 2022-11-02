@extends('layouts.layout')


@section('content')
<div class = "product">
<header>
<h1>$product-ProductName></h1>
</header>
<body>
<img src="{{ $product-> }}" alt="Product Image" height="200px" width="200px">
<h4><strong>Price: {{ $product->Price }}</strong></h4>

@if ($product->Quantity > 0)
    <h4>In Stock</h4>
    @else
    <h4>Out of Stock</h4>
@endif

<h4>Description</h4>
<p>{{ $product->Description }}</p>
</body>
</div>
@endsection