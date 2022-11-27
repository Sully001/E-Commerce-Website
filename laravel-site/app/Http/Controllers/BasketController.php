<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                'totalProductQuantity' => $product->Quantity,
                'quantity' => $basket[$x]['quantity'],
            ]);
        }

        return view('basket', [
            'productsInfo' => $productsInfo,
        ]);
            
    }

    //Adds product to the basket
    public function add() {
        //If there exists a product already
        //Get old quantity
        if (DB::table('baskets')->where('userID', request('userid'))->where('productID', request('productid'))->exists()) {
            $item = Basket::where('userID', request('userid'))->where('productID', request('productid'))->get();
            //dd($item);
            //Get the current quantity and add the new quantity
            $oldQuantity = $item[0]['quantity'];
            $newQuantity = $oldQuantity + intval(request('quantity'));
        } else {
            //Otherwise just use the new quantity
            $newQuantity = request('quantity');
        }

        $product = Product::findorFail(request('productid'));
        if($newQuantity > $product->Quantity) {
            Session::flash('stock', $product->Quantity);
            return redirect()->back();
        }

        DB::table('baskets')->updateOrInsert(
            ['userID' => request('userid'), 'productID' =>  request('productid'), 'price' => request('price')],
            ['quantity' => $newQuantity]
        );
        Session::flash('message', 'Product Succesfully Added To Basket');
        return redirect()->back();

    }

    public function destroy($id) {
        Basket::where('userID', auth()->user()->id)
        ->where('productID', $id)->delete();
        Session::flash('remove', "Product Succesfully Removed From Basket");
        return redirect()->back();
    }
}
