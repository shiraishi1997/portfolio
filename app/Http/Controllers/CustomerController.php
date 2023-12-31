<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Order;


class CustomerController extends Controller
{
  
    public function store (Customer $customer,Request $request)
    {
     $input = $reqest['customer'];
     $customer->create($input);
     return redirect('/customer/'.$cutomer->id);
    }
    
    public function show(Customer $customer){
        return view('customer.show')->with(['customer'=>$customer]);
    }
    public function index(Request $request)
    {

     $keyword =$request->input('keyword');
     $query=Customer::query();
    
     
    if(!empty($keyword))
        {
        $query->where('telephone',"%{$keyword}%");
        $query->orWhere('name','like','%'.$keyword.'%');

      }
     $customers=$query->get();
     return view('customer.index',compact('customers','keyword'));
    }
    public function registar(Customer $customer)
    {
    return view('order.registar')->with(['customer'=>$customer]);    
    }
}
