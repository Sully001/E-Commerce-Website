@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="" type="text/css">
@endsection

@section('content')
<h1>Welcome - {{ Session::get('name') }}</h1>
@endsection
    
