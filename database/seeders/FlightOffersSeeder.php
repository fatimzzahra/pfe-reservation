<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FlightOffer;
use App\Models\FlightOffers;

class FlightOffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FlightOffers::factory()->count(10)->create();
    }
}
