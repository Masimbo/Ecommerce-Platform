<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Auth;
use Cart;


class OrdersController extends Controller
{
    //
    public function create_order(Request $request){
        $order = new Order();
        if(Auth::check()){
            $order->user_id = Auth::user()->id;}
        else
        {
            $order->user_id = null;
        }
        $order->total = Cart::getTotal();
        $order->save();

        return redirect()->route('home');

        
    }
}
