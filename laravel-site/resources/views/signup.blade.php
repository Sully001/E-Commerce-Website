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
            <form action="" method="POST">
                @csrf
                <label for="name" class="form-label mt-2">Email</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>

                <label for="email" class="form-label mt-2">Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>

                <label for="password" class="form-label mt-2">Password</label>
                <input type="text" id="password" name="password" class="form-control" placeholder="Password" required>
                
                <button type="submit" class="btn btn-primary mt-2 text-center">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection