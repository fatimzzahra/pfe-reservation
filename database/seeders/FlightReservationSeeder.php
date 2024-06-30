<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FlightReservation;

class FlightReservationSeeder extends Seeder
{
    public function run()
    {
        FlightReservation::factory()->count(50)->create();
    }
}
