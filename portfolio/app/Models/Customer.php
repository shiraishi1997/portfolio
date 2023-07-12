<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $fiillable=
      [
       'name',
       'street',
       'telephone',
       'birthday'
       ];
      //中間テーブル設定
    /*public function addresses()
    {
        return $this->belongsToMany(address::class);
    }
    */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
    use HasFactory;
}
