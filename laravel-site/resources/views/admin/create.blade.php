@extends('layouts.layout')

@section('content')
<h1>Add a New Product</h1>

<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="product_name">Product Name: </label>
    <input type="text" name="productname"> <br><br>

    <label for="price">Price</label>
    <input type="number" name="price"> <br><br>

    <label for="qty">Quantity</label>
    <input type="number" name="qty" min="1" max="100"> <br><br>

    <label for="description">Description</label>
    <input type="text" name="description"> <br><br>

    <label for="category">Category</label>
    <select name="categories" id="categories">
        <option value="GPU">GPU</option>
        <option value="CPU">CPU</option>
        <option value="RAM">RAM</option>
        <option value="motherboards">Motherboards</option>
        <option value="storage">Storage</option>
        <option value="monitors">Monitors</option>
        <option value="psu">PSU</option> 
    </select><br><br>

    <label for="imageurl">Image URL</label>
    <input type="file" name="image" id="image"> <br><br>
    <input type="submit" value="Add Product">
</form>
@endsection