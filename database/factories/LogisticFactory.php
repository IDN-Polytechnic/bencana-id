<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Logistik>
 */
class LogisticFactory extends Factory
{
    public function definition()
    {
        return [
            'posko_id' => fake()->numberBetween(1, 10),
            'item_id' => fake()->numberBetween(1, 6),
            'stock' => fake()->numberBetween(10, 200),
            'demand' => fake()->numberBetween(10, 200),
            'unit_id' => fake()->numberBetween(1, 3),
        ];
    }
}
