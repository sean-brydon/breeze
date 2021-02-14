<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    // Get

    public function index(){
        $this->comment(session());
        
        return view('order');
    }

    public function orderCompleted($order){
        return view('ordercompleted',compact('order'));
    }

    // Handle Order Requests and validate.
    public function placeOrder(Request $req){
        $req->validate([
            'total'=>'required'
        ]);

        $order = Order::create([
            'userId' => Auth::id(),
            'total' => $req->total,
        ]);
        return Self::orderCompleted($order);
    }
}
