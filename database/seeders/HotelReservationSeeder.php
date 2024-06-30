<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HotelReservation;

class HotelReservationSeeder extends Seeder
{
    public function run()
    {
        HotelReservation::factory()->count(50)->create();
    }
}
