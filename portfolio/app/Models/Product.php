<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =
    [
        'name',
        'detail',
        'no_tax_price'
        
    ];
    public function orderes()
    {
        return $this->belongsToMany(order::class);
    }
    public function stores()
    {
        return $this->belongsToMany(store::class);
    }
    
    use HasFactory;
}
