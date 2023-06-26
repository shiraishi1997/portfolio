<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;


class CustomerController extends Controller
{
  
    //顧客ページ一覧
    public function index (Customer $customer)
    {
        return view('customer.index')->with(['customers'=>$customer->get()]);
    }
}
