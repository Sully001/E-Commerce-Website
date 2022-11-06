<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //This method gets all products in the database and returns them
    //to the views.
    public function index() {
        $products = Product::all();
        return view('index', [
            'products' => $products,
        ]);
    }

    public function adminIndex() {
        $products = Product::all();
        return view('admin.dashboard', [
            'products' => $products,
        ]);
    }

    //This method gets a single product from the database using the id or Product number.
    public function show($id) {
        $product = Product::findorFail($id);
        return view('show', [
            'product' => $product,
        ]);
    }

    public function store(Request $request) {
        $product = new Product();
        $product->ProductName = request('productname');
        $product->Price = request('price');
        $product->Quantity = request('qty');
        $product->Description = request('description');
        $product->CategoryName = request('categories');

        $path = $request->file('image')->store('images');
        $product->ImageURL = $path;
        $product->save();
        return redirect('admin/dashboard');
    }

}
