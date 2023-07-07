<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class order extends Model
{
    public function customer()
    {
        return $this->belongsTo(customer::class,);
        
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
    
    protected $fillable =[
        'delivery_date',
        'ordered_date',
        'customer_id'
        ];
    
    use HasFactory;
}
