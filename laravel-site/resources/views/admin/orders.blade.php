@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/dashboard.css" type="text/css">
    <script src="/js/script.js" defer></script>
@endsection

@section('content')
<div class="text-center">
    <h2>All Orders</h2>
    <p class="lead">Add a Product and Fill All Details</p>
</div>

<nav class="nav nav-pills nav-fill">
    <a class="nav-link" href="/admin/dashboard">View Products</a>
    <a class="nav-link" id="create-product" href="/admin/create">Add Product</a>
    <a class="nav-link" href="/admin/users">View Users</a>
    <a class="nav-link" href="/admin/orders" id="view-orders">All Orders</a>
</nav>

<div class="product-dashboard">
    <table class="table table-striped ">
        <thead>
            <tr class="table-active">
                <th scope="col">OrderID</th>
                <th scope="col">UserID</th>
                <th scope="col">ProductID</th>
                <th scope="col">Quantity</th>
                <th scope="col">SubTotal</th>
                <th scope="col">Order Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <th scope="row">{{ $order->orderID }}</th>
                <th scope="row">{{ $order->userID }}</th>
                <th scope="row">{{ $order->productID }}</th>
                <th scope="row">{{ $order->quantity }}</th>
                <th scope="row">{{ $order->subtotal }}</th>
                <th scope="row">{{ $order->created_at }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection