<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\FrizerSeeder;
use Database\Seeders\FrizuraSeeder;
use Database\Seeders\TerminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $FrizuraSeeder = new FrizuraSeeder;
        $FrizuraSeeder->run();

        $FrizerSeeder = new FrizerSeeder;
        $FrizerSeeder->run();

        $TerminSeeder = new TerminSeeder;
        $TerminSeeder->run();
    }
}
