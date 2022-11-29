<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    //
    public function adminIndex() {
        $products = Product::all();
        return view('admin.dashboard', [
            'products' => $products,
        ]);
    }

    //This method gets a single product from the database using the id or Product number.
    public function show($id) {
        $product = Product::findorFail($id);
        return view('admin.edit', [
            'product' => $product,
        ]);
    }

    //Storing Product Data
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
        Session::flash('store_product', 'Product Succesfully Created');
        return redirect('admin/dashboard');
    }

    //Deleting Product Data
    public function destroy($id) {
        $product = Product::findOrFail($id);
        //1. Delete the image of the product in the storage
        if (Storage::disk('local')->exists($product->ImageURL)) {
            Storage::disk('local')->delete($product->ImageURL);
            $product->delete();
            Session::flash('delete_product', 'Product Succesfully Deleted');
        }
        //2. Delete the product from the table
        return redirect('/admin/dashboard');
    }

    public function edit(Request $request, $id) {
        $product = Product::findorFail($id);
        $product->ProductName = request('productname');
        $product->Price = request('price');
        $product->Quantity = request('qty');
        $product->Description = request('description');
        $product->CategoryName = request('categories');

        if (request()->allFiles()) {
            if (Storage::disk('local')->exists($product->ImageURL)) {
                Storage::disk('local')->delete($product->ImageURL);
            }
            $path = $request->file('image')->store('images');
            $product->ImageURL = $path;
        }

        $product->save();
        Session::flash('edit_product', 'Product Succesfully Edited');
        return redirect('admin/dashboard');
    }

    public function orderIndex() {
        $orders = Order::all();
        return view('admin.orders', [
            'orders' => $orders,
        ]);
    }
}
