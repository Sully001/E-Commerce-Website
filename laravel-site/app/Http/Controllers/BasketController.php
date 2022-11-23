<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
{
    //
    public function index($id) {
        //Gets all products from the basket
        $basket = Basket::where('userID', $id)->get();

        //Creates product array and puts all products in there
        $productsArray = [];
        for($x = 0; $x < count($basket); $x++ ) {
            $productsArray[$x] = $basket[$x]['productID'];
        }
        //Check if the array of product id's is empty
        if(count($productsArray) === 0) {
            return view('emptybasket');
        }

        //Instantiate array that will be sent to view
        $productsInfo = [];
        //Store all info into associative array and push to an array
        for($x = 0; $x < count($productsArray); $x++) {
            $product = Product::findorFail($productsArray[$x]);
            array_push($productsInfo, [
                'id' => $product->ProductID,
                'name' => $product->ProductName,
                'price' => $product->Price,
                'image' => $product->ImageURL,
                'quantity' => $basket[$x]['quantity'],
            ]);
        }

        return view('basket', [
            'productsInfo' => $productsInfo,
        ]);
            
    }

    //Adds product to the basket
    public function add() {
        $basket = new Basket();

        $basket->productid = request('productid');
        $basket->userID = request('userid');
        $basket->quantity = request('quantity');
        $basket->save();
        Session::flash('message', "Product Succesfully Added To Basket");
        return redirect()->back();

    }
}
