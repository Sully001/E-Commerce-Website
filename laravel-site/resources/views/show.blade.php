@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/show.css" type="text/css">
@endsection

@section('content')
@if(Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message')}} - <a href="{{ route('basket', auth()->user()->id)}}" class="alert-link">View Basket?</a>
    </div>
@endif

@if(session()->exists('stock'))
    @if(Session::get('stock') == 0)
        <div class="alert alert-danger" role="alert">
            <strong><p>This item is no longer in stock</p></strong>
        </div>
    @else
    <div class="alert alert-danger" role="alert">
        <strong><p>Sorry There's Only {{ Session::get('stock') }} of This Item left!</p></strong>
    </div>
    @endif
@endif
<div class="product-container">
    <p class="product-name">{{$product->ProductName}}</p>
    <div class="product-main">
        <div class="section-left">
            <img src="/images/{{$product->ImageURL}}" alt="Product Image" height="200px" width="200px">
            <h4 class="price">Price: £{{ $product->Price }}</h4>
            <div class="add-payment-options">
                <form action="{{ route('basket.add')}}" method="POST">
                    @csrf
                    <input type="hidden" name="productid" value="{{ $product->ProductID }}">
                    @if(Auth::check())
                    <input type="hidden" name="userid" value="{{ auth()->user()->id }}">
                    @endif
                    <input type="hidden" name="price" value="{{ $product->Price }}">
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
            <h4><strong>Features</strong></h4>
            <p>{{ $product->Description }}</p>

            @if ($product->Quantity > 0)
                <h4 class="in-stock">In Stock</h4>
            @else
                <h4 class="out-stock">Out of Stock</h4>
            @endif
        </div>
        
    </div>
    
</div>
@endsection