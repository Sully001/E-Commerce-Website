@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/show.css" type="text/css">
@endsection

@section('content')
@if(Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message')}} - <a href="{{ route('basket', Session::get('id'))}}">View Basket?</a>
    </div>
@endif

<div class="product-container">
    <p class="product-name">{{$product->ProductName}}</p>
    <div class="product-main">
        <div class="section-left">
            <img src="{{ asset('storage/'.$product->ImageURL) }}" alt="Product Image" height="200px" width="200px">
            <h4 class="price">Price: £{{ $product->Price }}</h4>
            <div class="add-payment-options">
                <form action="{{ route('basket.add')}}" method="POST">
                    @csrf
                    <input type="hidden" name="productid" value="{{ $product->ProductID }}">
                    <input type="hidden" name="userid" value="{{ Session::get('id') }}">
                    <label for="quantity">Quanity</label>
                    <select name="quantity" id="quantity">
                        <option selected="selected" value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><br><br>
                    <button class="add-to-basket btn btn-info">Add To Basket</button>
                </form>
            </div>
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