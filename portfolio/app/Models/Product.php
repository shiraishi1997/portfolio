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
    use HasFactory;
}
