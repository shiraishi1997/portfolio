<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{  
    //商品一覧表示
    public function index(Product $product)
    {
        return view('product.index')->with(['products' => $product->get()]);  
    }
    //商品詳細表示
    public function show (Product $product)
    {
        return view('product.goods')->with(['product'=>$product]);
    }
    //商品登録ページに移動
    public function registar()
    {
    return view('product.registar');    
    }
    //商品登録機能
    public function store (Request $request ,Product $product)
    {
        $input=$request['product'];
        $product-> fill($input)->save();
        return redirect('/product/'.$product->id);
    }
    //商品編集画面に移動
    public function edit (Product $product)
    {
         return view('product.edit')->with(['product'=>$product]);
         
    }
    //商品編集機能
    public function update(Request $request ,Product $product)
    {
        $input=$request['product'];
        $product-> fill($input)->save();
        return redirect('/product/'.$product->id);
    }

    
    
}
