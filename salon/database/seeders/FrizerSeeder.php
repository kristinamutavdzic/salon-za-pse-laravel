<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Frizer;

class FrizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        public function run()
        {
            $frizer1 = Frizer::factory()->create();
            $frizer2 = Frizer::factory()->create();
        }

}
