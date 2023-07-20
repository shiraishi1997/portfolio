<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
class orderproductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=61;$i<=65;$i++)
         {
            
                db::table('order_product')->insert([
                    'order_id'=>$i,
                    'product_id'=>2,
                    ]);
           
                
            }
        } 
        
        //
    }

