<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Termin;
use App\Models\Frizer;
use App\Models\Frizura;

class TerminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $frizer1 = Frizer::factory()->create();
        $frizer2 = Frizer::factory()->create();

        $frizura1 = Frizura::factory()->create();
        $frizura2 = Frizura::factory()->create();

        Termin::factory(5)->create([
            'frizer_id'=>$frizer1->id,
            'frizura_id'=>$frizura1->id
           ]);

           Termin::factory(5)->create([
            'frizer_id'=>$frizer2->id,
            'frizura_id'=>$frizura2->id
           ]);
    }
}
