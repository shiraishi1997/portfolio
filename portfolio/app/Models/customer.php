<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
      //中間テーブル設定
    public function addresses()
    {
        return $this->belongsToMany(address::class);
    }
    public function orderes()
    {
        return $this->belongsToMany(order::class);
    }
    use HasFactory;
}
