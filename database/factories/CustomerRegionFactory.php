<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerRegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->numberBetween($min = 1, $max = 6),
            'region_id' => $this->faker->numberBetween($min = 1, $max = 6),
        ];
    }
}
