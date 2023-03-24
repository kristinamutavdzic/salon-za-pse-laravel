<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Frizer>
 */
class FrizerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'imePrezime' => $this->faker->name(),
            'godineIskustva' => $this->faker->numberBetween($min = 1, $max = 20),
            'rang' => $this->faker->numberBetween($min = 1, $max = 3),
            'kontakt' => $this->faker->phoneNumber(),
        ];
    }
}
