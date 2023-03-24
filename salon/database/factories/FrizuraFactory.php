<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Frizura>
 */
class FrizuraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naziv' => $this->faker->randomElement($array = array('Izlozbeno sisanje', 'Kratko sisanje', 'Srednje sisanje')),
            'vreme' => $this->faker->numberBetween($min = 15, $max = 90),
            'tezinaFrizure' => $this->faker->randomElement($array = array('Lako', 'Srednje', 'Tesko')),

        ];
    }
}
