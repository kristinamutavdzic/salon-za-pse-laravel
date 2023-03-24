<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Frizura;

class FrizuraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $frizura1 = Frizura::factory()->create();
        $frizura2 = Frizura::factory()->create();
        $frizura3 = Frizura::factory()->create();
    }
}
