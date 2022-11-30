@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="" type="text/css">
@endsection

@section('content')
    <div class="container-lg">
        <div class="text-center">
            <h2>Edit a Product</h2>
            <p class="lead">Please Change Any Details Here</p>
        </div>
        
        <div class="row justify-content-center my-3">
            <div class="col-lg-10 col-md-8 ">
                <form action="{{ route('admin.edited', $product->ProductID)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="productname" class="form-label mt-2">Product Name</label>
                    <input type="text" id="productname" name="productname" 
                    class="form-control" value="{{ $product->ProductName}}" required>

                    <label for="price" class="form-label mt-2">Price (£)</label>
                    <input type="number" id="price" name="price" value="{{ $product->Price }}" class="form-control" required>

                    <label for="qty" class="form-label mt-2">Quantity</label>
                    <input type="number" id="number" name="qty" value="{{ $product->Quantity}}" min="1" max="100" class="form-control" required>
                    
                    <label for="description" class="form-label mt-2">Description of Product</label>
                    <textarea name="description" class="form-control" id="description" required>{{ $product->Description}}</textarea>

                    <label for="category" class="form-label mt-2">Choose a Relevant Product Category</label>
                    <select name="categories" id="categories" class="form-select" value="{{ $product->CategoryName}}" required>
                        <option selected value="{{$product->CategoryName}}">{{$product->CategoryName}}</option>
                        <option value="GPU">GPU</option>
                        <option value="CPU">CPU</option>
                        <option value="RAM">RAM</option>
                        <option value="Motherboards">Motherboards</option>
                        <option value="Storage">Storage</option>
                        <option value="Monitors">Monitors</option>
                        <option value="PSU">PSU</option>
                    </select>
                    
                    <label for="image" class="form-label mt-3">Upload Product Image</label>
                    <input type="file" name="image" id="image" class="form-control">

                    <label for="image-preview" class="form-label mt-3">
                        <strong>Preview of Current Image in the Database</strong><br> 
                        <em>Only Upload a File if You wish to change the Image</em></label><br>
                    <img src="/images/{{$product->ImageURL}}" alt="Image for Product" height="100" 
                    width="100px" id="image-preview">

                    <div class="mb-4 mt-5 text-center">
                        <button type="submit" class="btn btn-primary">Save Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection