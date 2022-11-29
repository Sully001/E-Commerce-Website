@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="" type="text/css">
@endsection

@section('content')
@if(Session::has('access'))
    <div class="alert alert-warning" role="alert">
        {{ Session::get('access')}}
    </div>
@endif
<div class="text-center empty-basket">
    <h2>Your basket is Empty</h2>
    <p class="lead">Go to <a href="/products">Products To View and Add</a> to your basket</p>
</div>
@endsection