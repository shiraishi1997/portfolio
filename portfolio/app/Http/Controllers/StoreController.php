<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function view(Store $store)
    {
        return view('store.account')->with(['store'=> $store]);
    }
    public function registar()
    {
        return view('store.registar');
    }
     public function store (Request $request ,Store $store)
    {
        $input=$request['store'];
        $store-> fill($input)->save();
        return redirect('/store/'.$store->id);
    }
    //
}
