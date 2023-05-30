<?php

namespace Database\Seeders;
use Database\Factories\EstudioFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // EstudioFactory::factory()->count(1000)->create();
        EstudioFactory::factoryForModel('estudio')->count(20)->create();
    }
}
