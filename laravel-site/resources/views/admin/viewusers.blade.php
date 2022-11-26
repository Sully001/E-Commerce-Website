@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/dashboard.css" type="text/css">
    <script src="/js/script.js" defer></script>
@endsection

@section('content')
    <div class="text-center">
        <h2>View All Users</h2>
        <p class="lead">View All Users Currently on The Platform</p>
    </div>

    <nav class="nav nav-pills nav-fill">
        <a class="nav-link" href="/admin/dashboard">View Products</a>
        <a class="nav-link" id="create-product" href="/admin/create">Add Product</a>
        <a class="nav-link" id="view-users" href="{{route('admin.users')}}">View Users</a>
        <a class="nav-link" href="{{route('orders')}}">All Orders</a>
    </nav>

    <div class="user-dashboard">
        <table class="table table-striped ">
        <thead>
            <tr class="table-active">
                <th scope="col">ID</th>
                <th scope="col">User Name</th>
                <th scope="col">User Email</th>
                <th scope="col">User Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <th scope="row">{{ $user->name}}</th>
                <th scope="row">{{ $user->email}}</th>
                <th scope="row">{{ $user->created_at }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection