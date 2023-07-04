<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
         for($i=1;$i<=20;$i++) {
             db::table('customers')->insert([
                 'name'=>fake()->name(),
                 'telephone'=>'0120001002',
                 'birthday'=>fake()->date($format = 'Y-m-d', $max = 'now'),
                 'created_at'=>carbon::now(),
                 'postcode'=>rand(0600000,9071801),
                 'prefecture'=>fake()->prefecture(),
                 'city'=>'city',
                 'town'=>'town',
                 'street'=>'street{',
                 'block'=>'block{$i}',
                 
                 
                 
                 ]);
         }
      
            
      }
        //
    }

