<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function customers()
    {
        return $this->belongsToMany(customer::class);
        
    }
    public function products()
    {
        return $this->belongsToMany(product::class);
    }
    
    public function store(Reqest $request , Order $order)
    {
        $input_order =$request['order'];
        $input_products =$request->products_array;
        $order->creat($input_order);
        $order->products()->attach($input_products);
    }
    
    use HasFactory;
}
