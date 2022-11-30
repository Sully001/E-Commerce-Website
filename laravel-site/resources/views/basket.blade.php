@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/basket.css" type="text/css">
@endsection

@section('content')
    @if(Session::has('remove'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('remove')}}
    </div>
    @endif
    @if(Session::has('access'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('access')}}
    </div>
    @endif
    <div class="text-center">
        <h2 class="basket-name">{{ auth()->user()->name }}'s Basket</h2> 
        <p class="lead">Checkout or Shop for More</p>
    </div>
    <div class="remove-all-button">
        <form action="{{ route('basket.removeAll', auth()->user()->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Remove All Items</button>
        </form>
    </div>
    <div class="basket-main">
        <div class="all-items-container">
            <div class="all-items">
                @foreach($productsInfo as $product)
                    <div class="individual-item">
                        <div class="image-text-container">
                            <img src="/images/{{$product['image']}}" 
                                alt="Image" width="130px" height="130px">
                            <div class="name-item-num">
                                <p class="bold">{{$product['name']}}</p>
                                <p class="bold">Product Number: {{$product['id']}}</p>
                            </div>
                        </div>

                        <div class="price-stock">
                            <p class="bold">Price: £{{$product['price']}}</p>
                            <p class="bold">Quantity - {{$product['quantity']}}</p>
                            <div class="stock-check">
                                <p>In Stock</p>
                            </div>
                        </div>
                        <div class="remove-container">
                            <form action="{{ route('basket.remove', $product['id'])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="userid" value="{{auth()->user()->id}}">
                                <button class="btn btn-danger">Remove</button>
                            </form>
                        </div> 
                    </div>
                @endforeach
            </div>
            
        </div>
        <div class="checkout-container">
            <div>
                <strong><p>Subtotal: £{{ $basketSubTotal }}</p></strong>
            </div>
            <div>
                <form action="{{ route('checkout')}}" method="POST">
                    @csrf
                    <input type="hidden" name="userid" value="{{ auth()->user()->id }}">
                    <button class="btn btn-info checkout">
                        <p class="checkout-txt">Checkout</p>
                        <img class="cart-image" src="/images/shopping-cart(1).png" alt="Image of cart" height="15px" width="15px">
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection