@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/previous-order-details.css" type="text/css">
@endsection

@section('content')
    <div class="all-products-div">
        <h1 class="all-products-title">Details For Order</h1>
    </div>
    <div class="order-details">
        <table class="table table-striped ">
        <thead>
            <tr class="table-active">
                <th scope="col">Product Image</th>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price </th>

            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($orderDetails); $i++)
            <tr>
                <th scope="row"><img src="{{ asset('storage/'.$orderDetails[$i]['image'])}}" 
                    alt="Product Image" width="100px" height="100px"></th>
                <th scope="row">{{ $orderDetails[$i]['productid']}}</th>
                <th scope="row">{{ $orderDetails[$i]['name']}}</th>
                <th scope="row">x{{ $orderDetails[$i]['quantity']}}</th>
                <th scope="row">{{ $orderDetails[$i]['price']}}</th>
            </tr>
            @endfor
            <tr>
            <th scope="row" colspan="4">SubTotal</th>
            <td><strong>£{{ $subtotal }}</strong></td>
            </tr>
        </tbody>
    </table>
    </div>
@endsection
