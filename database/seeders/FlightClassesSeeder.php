<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FlightClasses;

class FlightClassesSeeder extends Seeder
{
    public function run()
    {
        FlightClasses::factory()->count(3)->create(); 
    }
}
