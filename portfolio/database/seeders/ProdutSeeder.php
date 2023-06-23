<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date_start=Carbon::create("2020","1","1");
        $date_end=Carbon::create("2022","12","31");
        
        $date_max = strtotime($date_end);
        $date_min = strtotime($date_start);
        
        $price_start =carbon::create()
        
        $date = date('Y-m-d',$date)
        
        DB::table('Product')->insert([
            'name'=>Str::random(20);
            'detaill'=>Str::random(20);
            'price'=>Str::rand
            ])
        //
    }
}
