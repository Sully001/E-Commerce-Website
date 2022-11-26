@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/dashboard.css" type="text/css">
    <script src="/js/script.js" defer></script>
@endsection

@section('content')
    <div class="text-center">
        <h2>View all Products</h2>
        <p class="lead">Edit, Delete and View All Product Details</p>
    </div>

    <nav class="nav nav-pills nav-fill">
        <a class="nav-link" id="view-products" href="/admin/dashboard">View Products</a>
        <a class="nav-link" href="/admin/create">Add Product</a>
        <a class="nav-link" href="{{route('admin.users')}}">View Users</a>
        <a class="nav-link" href="{{route('orders')}}">All Orders</a>
    </nav>
    
    <div class="product-dashboard">
        <table class="table table-striped ">
        <thead>
            <tr class="table-active">
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price </th>
                <th scope="col">Quantity</th>
                <th scope="col">Product Category</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->ProductID }}</th>
                <th scope="row">{{ $product->ProductName }}</th>
                <th scope="row">{{ $product->Price }}</th>
                <th scope="row">{{ $product->Quantity }}</th>
                <th scope="row">{{ $product->CategoryName }}</th>
                <th scope="row">
                    <a href="{{ route('admin.edit', $product->ProductID)}}">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                </th>
                <th scope="row">
                    <form action="{{ route('admin.destroy', $product->ProductID) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection