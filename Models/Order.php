<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Product;

class Order extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
        
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('order_id', 'product_id');
    }
    
    protected $fillable =[
        'delivery_date',
        'ordered_date',
        'customer_id'
        ];
    
    use HasFactory;
}
