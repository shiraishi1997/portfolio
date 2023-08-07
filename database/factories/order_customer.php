<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\Order;
use Carbon\Carbon;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                customer::factory(10)->create()
                ->each(function($customer){
                    order::create([
                        'customer_id'=>$customer->id,
                        'delivery_date'=>carbon::now(),
                        'ordered_date'=>carbon::now(),
                        'created_at'=>carbon::now(),
                        ]);
                })
            //
        ];
    }
}
