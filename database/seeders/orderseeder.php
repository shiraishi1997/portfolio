<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Customer;

class orderseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         customer::factory(5)->create()
                ->each(function($customer){
                        order::create([
                        'customer_id'=>$customer->id,
                        'delivery_date'=>carbon::now(),
                        'ordered_date'=>carbon::now(),
                        'created_at'=>carbon::now(),
                        ]);
                });
        
       // $customers = customer::factory(10)->create();
        //order::factory(10)->recycle($customer)->create();
    
        
    }
}
