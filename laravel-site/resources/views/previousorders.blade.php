@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/previous-orders.css" type="text/css">
@endsection

@section('content')
<h1>This is the previous orders - User - {{ Session::get('id') }}</h1>
@for ($i = count($uniqueOrderID); $i > 0; $i--)
    <div id="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$i}}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
                    Order {{$i}}
                </button>
                </h2>
                <div id="collapse{{$i}}" class="accordion-collapse collapse" aria-labelledby="heading{{$i}}" data-bs-parent="#accordionExample">
                <div class="accordion-body" id="accordion-body">
                    <div>
                        @for($x = count($orders) - 1; $x >= 0; $x--)
                            @if ($orders[$x]['orderID'] == $uniqueOrderID[($i - 1)]['orderID'])
                                <p>Product ID - {{$orders[$x]['productID']}} ({{ $orders[$x]['quantity']}})</p>
                            @endif
                        @endfor
                    </div>
                    <div class="subtotal">
                        <p>SubTotal - £2000</p>
                    </div>
                    <div class="button-div">
                        <button class="btn btn-primary">View Details</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endfor
@endsection

