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
    use HasFactory;
}
