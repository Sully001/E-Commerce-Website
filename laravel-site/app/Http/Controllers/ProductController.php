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
        return view('products', [
            'products' => $products,
        ]);
    }

    //This method gets a single product from the database using the id or Product number.
    public function show($id) {
        $product = Product::findorFail($id);
        return view('/products/{id}', [
            'product' => $product
        ]);
    }
}
