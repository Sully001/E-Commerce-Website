<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreviousOrderController extends Controller
{
    //
    public function getPreviousOrders($id) {
        //Get all unqie order ID's that relate to a certain user
        $uniqueOrderID = Order::select('orderID')->where('userID', $id)->distinct()->get();
        //Get the rows where the orders for a specific user are
        //dd($uniqueOrderID[7]);
        $orders = Order::where('userID', $id)->get();
        
        //dd($orders);
        return view('previousorders', [
            'orders' => $orders,
            'uniqueOrderID' => $uniqueOrderID,
        ]);
    }

    public function getPreviousOrderDetails($id) {
        return view('previous-order-details', [
            'id' => $id,
        ]);
    }
}
