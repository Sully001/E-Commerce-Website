<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
{
    //
    public function index($id) {
        $basket = Basket::where('userID', $id)->get();

        return view('basket', [
            'basket' => $basket,
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
