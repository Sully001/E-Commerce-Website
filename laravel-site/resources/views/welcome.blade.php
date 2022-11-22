@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="" type="text/css">
@endsection

@section('content')
<h1>Welcome - {{ Session::get('name') }} - {{ Session::get('id') }}</h1>
@endsection
    
