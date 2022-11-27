<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
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
        //Use order ID to get all orders from the table that are related 
        //to that user
        $orders = Order::where('orderID', $id)->get();
        //Grab all product numbers to then query their details
        $products = [];
        for($i = 0; $i < count($orders); $i++) {
            array_push($products, [
                $orders[$i]['productID'],
            ]);
        }
        //Now pull all order details for that order
        $orderDetails = [];
        for ($i = 0; $i < count($products); $i++) {
            $product = Product::where('ProductID', $products[$i])->get();
            array_push($orderDetails, [
                'productid' => $product[0]['ProductID'],
                'name' => $product[0]['ProductName'],
                'price' => $product[0]['Price'],
                'image' => $product[0]['ImageURL'],
                'quantity' => $orders[$i]['quantity'],
                'fullPrice' => ($orders[$i]['quantity'] * $product[0]['Price']),
            ]);
        }
        //Get the subtotal by looping through all the orders fullPrices
        $subTotal = 0;
        for($i = 0; $i < count($orderDetails); $i++) {
            $subTotal += $orderDetails[$i]['fullPrice'];
        }

        return view('previous-order-details', [
            'orderDetails' => $orderDetails,
            'orderID' => $id,
            'subtotal' => $subTotal,
        ]);
    }
}
