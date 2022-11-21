@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/basket.css" type="text/css">
@endsection

@section('content')
    <div class="basket-main">
        <h1>User's Basket</h1>
        <div class="all-items-container">
            <div class="all-items">
                <div class="individual-item">
                    <div class="image-text-container">
                        <img src="/images/AMD-Ryzen-5-5600X-3.7GHz.jpg" 
                            alt="Image" width="100px" height="50px">
                        <div class="name-item-num">
                            <p>AMD AMD-Ryzen-5-5600X-3</p>
                            <p>Product Number: 10</p>
                        </div>
                    </div>
                    <div class="price-stock">
                        <p>Price: £1999</p>
                        <div class="stock-check">
                            <span class="dot"></span>
                            <p>In Stock</p>
                        </div>
                    </div>
                </div>
    
                <div class="individual-item">
                    <div class="image-text-container">
                        <img src="/images/AMD-Ryzen-5-5600X-3.7GHz.jpg" 
                            alt="Image" width="100px" height="50px">
                        <div class="name-item-num">
                            <p>AMD AMD-Ryzen-5-5600X-3</p>
                            <p>Product Number: 10</p>
                        </div>
                    </div>
                    <div class="price-stock">
                        <p>Price: £1999</p>
                        <div class="stock-check">
                            <span class="dot"></span>
                            <p>In Stock</p>
                        </div>
                    </div>
                </div>
                <div class="individual-item">
                    <div class="image-text-container">
                        <img src="/images/AMD-Ryzen-5-5600X-3.7GHz.jpg" 
                            alt="Image" width="100px" height="50px">
                        <div class="name-item-num">
                            <p>AMD AMD-Ryzen-5-5600X-3</p>
                            <p>Product Number: 10</p>
                        </div>
                    </div>
                    <div class="price-stock">
                        <p>Price: £1999</p>
                        <div class="stock-check">
                            <span class="dot"></span>
                            <p>In Stock</p>
                        </div>
                        
                    </div>
                </div>
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