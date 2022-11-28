@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="" type="text/css">
@endsection


@section('content')
<div class="container-md">
    <div class="text-center">
        <h2>Welcome To Hardware 28 Online Store</h2>
        <p class="lead">Sign Up To Enjoy Our Site</p>
    </div>
    
    <div class="row justify-content-center my-3">
        <div class="col-lg-5 col-md-8">
            <form action="/register" method="POST">
                @csrf
                <label for="name" class="form-label mt-2">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" required>

                <label for="email" class="form-label mt-2">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required>

                <label for="password_confirmation" class="form-label mt-2">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>

                <label for="password_confirmation" class="form-label mt-2">Retype Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Retype your password" required>
                <div class="errorCheck">
                    @if($errors->any())
                        <div class="statusCheck">
                         @foreach ($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mt-2">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection