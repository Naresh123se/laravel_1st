<?php

namespace App\Service;

use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderService 
{
    public function __construct(
        protected Order $order
    )
    {

    }

    public function saveOrder(Request $request)
    {
        $order = new Order();

        // $order->user_id = Auth::id();
        // $order->fname = $request->input('fname');
        // $order->email = $request->input('email');
        // $order->phone = $request->input('phone');
        // $order->address = $request->input('address');
        // $order->totalPrice = $request->input('totalPrice');
        // $order->tracking_no = '#ODR' . rand(1111, 9999);
        // $order->payment = $request->input('payment');
        // $order->status = $request->input('status', 0); // Optional default
        // $order->message = $request->input('message', null); 

        $order->user_id = Auth::id(); // Maps to 'user_id'
$order->fname = $request->input('fname'); // Maps to 'fname'
$order->lname = $request->input('lname'); // Maps to 'lname'
$order->email = $request->input('email'); // Maps to 'email'
$order->phone = $request->input('phone'); // Maps to 'phone'
$order->address = $request->input('address'); // Maps to 'address'
$order->totalPrice = $request->input('totalPrice'); // Maps to 'totalPrice'
$order->status = $request->input('status', 0); // Optional default, maps to 'status'
$order->message = $request->input('message', null); // Optional, maps to 'message'
$order->tracking_no = '#ODR' . rand(1111, 9999); // Maps to 'tracking_no'
$order->created_at = now(); // Maps to 'created_at', use current timestamp
$order->updated_at = now(); // Maps to 'updated_at', use current timestamp


        $order->save();

        return $order;
    }
}