<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use Carbon\Carbon;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class customerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                 'name' => fake() ->name(),
                 'telephone'=>'0120001002',
                 'birthday' => fake() ->date($format = 'Y-m-d', $max = 'now'),
                 'created_at'=>carbon::now(),
                 'postcode'=>rand(0600000,9071801),
                 'prefecture' => fake() ->prefecture(),
                 'city'=>'city',
                 'town'=>'town',
                 'street'=>'street',
                 'block'=>'block',
            //
        ];
    }
}
