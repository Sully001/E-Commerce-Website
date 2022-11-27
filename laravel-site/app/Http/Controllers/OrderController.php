<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Http\Controllers\BasketController;
use App\Models\Product;

class OrderController extends Controller
{
    //
    public function checkout() {
        //Get the last order id and add 1 to signify new order
        if (DB::table('orders')->max('orderID') == null) {
            $newestID = 1;
        } else {
            $newestID = DB::table('orders')->max('orderID') + 1;
        }
        
        //Get userid from request
        //get all userid items from basket ($item is a collection)
        $items = Basket::where('userID', request('userid'))->get();
        //dd($items[1]['quantity']);
        //Save all the new items in the order table
        for($x = 0; $x < count($items); $x++) {
            $order = new Order();
            $order->orderID = $newestID;
            $order->userID = intval(request('userid'));
            $order->productID = $items[$x]['productID'];
            $order->quantity = $items[$x]['quantity'];
            $order->subtotal = ($items[$x]['quantity']) * ($items[$x]['price']);
            $order->save();

            $product = Product::findorFail($items[$x]['productID']);
            $product->Quantity = $product->Quantity - $items[$x]['quantity'];
            $product->save();
        }
        //Empties the basket after an order
        Basket::where('userID', request('userid'))->delete();
        return view('checkout');
    }
}
