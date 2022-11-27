<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posko>
 */
class PoskoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'alamat' => fake()->city(),
            'link_gps' => fake()->domainName(),
            'kordinator' => fake()->name(),
            'telp_kordinator' => fake()->creditCardNumber(),
            'relawan_user' => fake()->numberBetween(1, 3),
            'lembaga_id' => fake()->numberBetween(1, 5),
            'pengungsi' => fake()->numerify(),
            'notes' => fake()->sentence(5),
            'status_id' => fake()->numberBetween(1, 3),
        ];
    }
}
