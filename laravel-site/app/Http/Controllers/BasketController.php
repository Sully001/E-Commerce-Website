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
        $user = User::findorFail($id);
        return view('basket', [
            'user' => $user,
        ]);
    }

    //Adds product to the basket
    public function add(Request $request) {
        $basket = new Basket();

        $basket->productid = request('productid');
        $basket->userID = request('userid');
        $basket->quantity = request('quantity');
        $basket->save();
        Session::flash('message', "Product Succesfully Added To Basket");
        return redirect()->back();

    }
}
