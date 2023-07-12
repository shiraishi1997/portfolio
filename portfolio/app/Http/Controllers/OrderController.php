<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderController extends Controller
{
    
    use SoftDeletes;
    //注文一覧
    /*public function index (Order $order){
        return view('order.index')->with(['orders'=>$order->get()]);
    }
    */
    //注文詳細
    public function show (Order $order){
        return view('order.show')->with(['order'=>$order]);
        
    }
    public function edit (Order $order){
        return view('order.edit')->with(['order'=>$order,]);
        
    }
    public function update(Request $request,Order $order){
        $input_order =$request['order'];
        $order->fill($input_order)->save();
        return redirect('/order/'.$order->id);
        
    }
     public function index(Request $request)
    {

     $keyword =$request->input('keyword');
     $orders=Order::whereHas('customer',function($query){
         if(!empty($keyword)){
       // $query->where('telephone',"%{$keyword}%");
        $query->Where('name','like', '%'.$keyword.'%');
        }})->get();
    
     //dd($orders);
     return view('order.index',compact('orders','keyword'));
    }
    
    public function delete (Order $order){
        $order->products()->detach();
        $order->delete();
        return redirect('/order');
    }
}
