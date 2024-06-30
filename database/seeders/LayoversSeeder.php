<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layover;
use App\Models\Layovers;

class LayoversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layovers::factory()->count(10)->create();
    }
}

