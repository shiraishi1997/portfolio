<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Store extends Model 
{
    use HasFactory;
    use Authenticatable;
     public function addresses()
    {
        return $this->belongsToMany(Address::class);
    }
    protected $fillable=
    [
        'name',
        'street',
        'block',
        'telephone',
        'email',
        'password'
    ];
    
    use HasFactory;
}
