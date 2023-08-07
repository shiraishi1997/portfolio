<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Order;

class ProductController extends Controller
{ 
    public function index(Product $product)
    {
        return view('product.index')->with(['products' => $product->get()]);  
    }
    public function show (Product $product)
    {
        return view('product.goods')->with(['product'=>$product]);
    }
    public function registar()
    {
    return view('product.registar');    
    }
    public function store (Request $request ,Product $product)
    {
        $input=$request['product'];
        $product-> fill($input)->save();
        return redirect('/product/'.$product->id);
    }
    public function edit (Product $product)
    {
         return view('product.edit')->with(['product'=>$product]);
         
    }
    public function update(Request $request ,Product $product)
    {
        $input=$request['product'];
        $product-> fill($input)->save();
        return redirect('/product/'.$product->id);
    }

    
    
}
