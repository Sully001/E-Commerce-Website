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

    public function restoreIndex() {
        $products = Product::onlyTrashed()->get();
        //dd($products[0]['ProductID']);
        return view('admin.restore-products', [
            'products' => $products,
        ]);
    }

    public function restoreProduct($id) {
        $product = Product::onlyTrashed()->findOrFail($id);
        $product->restore();
        Session::flash('restored', 'Product Has Been Restored');
        return redirect()->back();
    }

    //Storing Product Data
    public function store(Request $request) {
        $product = new Product();
        $product->ProductName = request('productname');
        $product->Price = request('price');
        $product->Quantity = request('qty');
        $product->Description = request('description');
        $product->CategoryName = request('categories');

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images',$filename);
            $product->ImageURL = $filename;
        }
        $product->save();
        Session::flash('store_product', 'Product Succesfully Created');
        return redirect('admin/dashboard');
    }

    //Deleting Product Data
    public function destroy($id) {
        //1. Delete the product from the table
        $product = Product::findOrFail($id);
        $product->delete();
        Session::flash('delete_product', 'Product Succesfully Deleted');
        
        return redirect('/admin/dashboard');
    }

    public function edit(Request $request, $id) {
        $product = Product::findorFail($id);
        $product->ProductName = request('productname');
        $product->Price = request('price');
        $product->Quantity = request('qty');
        $product->Description = request('description');
        $product->CategoryName = request('categories');

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('images',$filename);
            $product->ImageURL = $filename;
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
