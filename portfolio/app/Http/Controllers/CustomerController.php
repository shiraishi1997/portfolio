<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Customer;


class CustomerController extends Controller
{
  
    //顧客ページ一覧
   /* public function index (Customer $customer)
    {
        return view('customer.index')->with(['customers'=>$customer->get()]);
    }
    */
    //会員登録
    public function store (Customer $customer,Request $request)
    {
     $input = $reqest['customer'];
     $customer->create($input);
     return redirect('/customer/'.$cutomer->id);
    }
    public function index(Request $request)
    {

     $keyword =$request->input('keyword');
     $query=customer::query();
    
     
    if(!empty($keyword))
        {
        $query->where('telephone',"%{$keyword}%");
        $query->orWhere('name','like','%'.$keyword.'%');

        //->orwhereHas('customers',function ($query) use ($keyword){
            // $query->where('name','LIKE'<"%{$keyword}%");}
            
      }
     $customers=$query->get();
     return view('customer.index',compact('customers','keyword'));
    }
    public function registar(Customer $customer)
    {
       // dd($customer);
    return view('order.registar')->with(['customer'=>$customer]);    
    }
}
