@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/previous-orders.css" type="text/css">
@endsection

@section('content')
<div class="text-center">
    <h2>User {{ auth()->user()->id }}'s Previous Orders</h2>
    <p class="lead">Open Each Order and Click View Details To See More</p>
    <p class="lead">You Latest Orders Are At The Top!</p>
</div>
@for ($i = count($uniqueOrderID); $i > 0; $i--)
    <div id="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$i}}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
                    <strong>Order {{$i}}</strong> 
                </button>
                </h2>
                <div id="collapse{{$i}}" class="accordion-collapse collapse" aria-labelledby="heading{{$i}}" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-secondary" id="accordion-body">
                    <div>
                        @for($x = count($orders) - 1; $x >= 0; $x--)
                            @if ($orders[$x]['orderID'] == $uniqueOrderID[($i - 1)]['orderID'])
                                <p><strong>Product ID</strong>
                             - {{$orders[$x]['productID']}} <br>(<strong>Quantity</strong>: X {{ $orders[$x]['quantity']}})</p>
                            @endif
                        @endfor
                    </div>
                    <div class="subtotal">
                        <p><strong>SubTotal - £2000</strong></p>
                    </div>
                    <div class="button-div">
                        <form action="{{route('previous.details', $uniqueOrderID[($i-1)]['orderID'])}}">
                            <button class="btn btn-primary">View Details</button>
                        </form>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
@endfor
@endsection

