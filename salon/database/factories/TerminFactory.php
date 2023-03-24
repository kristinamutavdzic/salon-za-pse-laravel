<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Frizer;
use App\Models\Frizura;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Termin>
 */
class TerminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'datum' =>  $this->faker->date(),
            'vreme' => $this->faker->time(),
            'frizer_id' => Frizer::factory(),
            'frizura_id' => Frizura::factory(),
        ];
    }
}
