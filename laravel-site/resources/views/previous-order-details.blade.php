@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/previous-orders.css" type="text/css">
@endsection

@section('content')
    <h1>This is the order details. Id = {{ $id }}</h1>
@endsection
