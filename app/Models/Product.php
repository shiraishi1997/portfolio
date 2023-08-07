<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Product extends Model
{
    protected $fillable =
    [
        'name',
        'detail',
        'no_tax_price'
        
    ];
   public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
    
    use HasFactory;
}
