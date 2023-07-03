<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    public function customers()
    {
        return $this->belongsToMany(customer::class);   
    }
    
    public function addresses()
    {
        return $this->belongsTomany(store::class);
    }
    
    use HasFactory;
}
