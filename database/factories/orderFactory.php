<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\Customer;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $deli_date =$this->faker->dateTimeBetween('-1week');
        $ord_date =$this->faker->dateTimeBetween('-1month');
        return [
             'delivery_date'=>$deli_date,
             'ordered_date'=>$ord_date,
             'created_at'=>carbon::now(),
             //'customer_id'=>customer::factory(),
             
            //
        ];
    }
}
