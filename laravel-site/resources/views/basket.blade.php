@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/basket.css" type="text/css">
@endsection

@section('content')
    <div class="basket-main">
        <h1>User {{ Session::get('id') }}'s Basket</h1>
        <div class="all-items-container">
            <div class="all-items">
                @foreach($productsInfo as $product)
                    <div class="individual-item">
                        <div class="image-text-container">
                            <img src="{{ asset('storage/'.$product['image']) }}" 
                                alt="Image" width="70px" height="70px">
                            <div class="name-item-num">
                                <p class="bold">{{$product['name']}}</p>
                                <p class="bold">Product Number: {{$product['id']}}</p>
                            </div>
                        </div>

                        <div class="price-stock">
                            <p class="bold">Price: £{{$product['price']}}</p>
                            <p class="bold">Quantity - {{$product['quantity']}}</p>
                            <div class="stock-check">
                                <span class="dot"></span>
                                <p>In Stock</p>
                            </div>
                        </div>
                        </div>
                @endforeach
            </div>
            <div class="checkout-container">
                <div>
                    <p>Subtotal:</p>
                    <p>£5000</p>
                </div>
                <div>
                    <p>VAT (20%):</p>
                    <p>£20</p>
                </div>

                <div>
                    <form action="">
                        <button class="btn btn-info checkout">
                            <p class="checkout-txt">Checkout</p>
                            <img class="cart-image" src="/images/shopping-cart.png" alt="Image of cart" height="15px" width="15px">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection