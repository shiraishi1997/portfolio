<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Store;

class StoreController extends Controller
{
    public function view(Store $store)
    {
        return view('store.account')->with(['store'=> $store]);
    }
    //
}
