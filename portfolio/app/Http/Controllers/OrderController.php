<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    
    //注文一覧
    public function index (Order $order)
    {
        return view(order.index)->with(['orders']->$order->get());
    }
    //注文登録
    
}
