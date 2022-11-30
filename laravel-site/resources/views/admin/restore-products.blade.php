@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/dashboard.css" type="text/css">
    <script src="/js/script.js" defer></script>
@endsection

@section('content')
    @if(Session::has('restored'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('restored')}}
        </div>
    @endif
    <div class="text-center">
        <h2>Click Restore To Restore A Deleted Product</h2>
    </div>

    <nav class="nav nav-pills nav-fill">
        <a class="nav-link" href="/admin/dashboard">View Products</a>
        <a class="nav-link" href="/admin/create">Add Product</a>
        <a class="nav-link" href="{{route('admin.users')}}">View Users</a>
        <a class="nav-link" href="{{route('orders')}}">All Orders</a>
        <a class="nav-link" id="restore-order" href="{{route('restore.index')}}">Restore Orders</a>
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
                    <form action="{{ route('restore.product', $product->ProductID) }}" method="POST">
                        @csrf
                        <button class="btn btn-warning" onclick="return confirm('Are you sure you want to restore this?')">Restore</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection