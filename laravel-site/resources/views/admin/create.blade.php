@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/css/dashboard.css" type="text/css">
    <script src="/js/script.js" defer></script>
@endsection

@section('content')
    <div class="container-lg mt-3">
        <div class="text-center">
            <h2>Add a Product</h2>
            <p class="lead">Add a Product and Fill All Details</p>
        </div>

        <nav class="nav nav-pills nav-fill">
            <a class="nav-link" href="/admin/dashboard">View Products</a>
            <a class="nav-link" id="create-product" href="/admin/create">Add Product</a>
            <a class="nav-link" href="/admin/users">View Users</a>
            <a class="nav-link" href="/admin/orders">All Orders</a>
        </nav>
        
        <div class="row justify-content-center my-3">
            <div class="col-lg-10 col-md-8 ">
                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="productname" class="form-label mt-2">Product Name</label>
                    <input type="text" id="productname" name="productname" 
                    class="form-control" placeholder="e.g. Intel Core i7" required>

                    <label for="price" class="form-label mt-2">Price (£)</label>
                    <input type="number" id="price" name="price" class="form-control" required>

                    <label for="qty" class="form-label mt-2">Quantity</label>
                    <input type="number" id="number" name="qty" min="1" max="100" class="form-control" required>
                    
                    <label for="description" class="form-label mt-2">Description of Product</label>
                    <textarea name="description" class="form-control" id="description" required></textarea>

                    <label for="category" class="form-label mt-2">Choose a Relevant Product Category</label>
                    <select name="categories" id="categories" class="form-select">
                        <option value="Category" selected>Choose a cateogry</option>
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

                    <div class="mb-4 mt-5 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection