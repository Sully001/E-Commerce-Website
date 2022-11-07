@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/dashboard.css" type="text/css">
@endsection

@section('content')
    <h1>This is the dashboard for the admin</h1>

    <div class="product-dashboard">
        <table class="table table-striped table-dark">
        <thead>
            <tr>
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
                    <form action="">
                        @csrf
                        <button class="btn btn-warning">Edit</button>
                    </form>
                </th>
                <th scope="row">
                    <form action="{{ route('admin.destroy', $product->ProductID) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    



@endsection