<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HotelOffer;
use App\Models\HotelOffers;

class HotelOffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelOffers::factory()->count(10)->create();
    }
}
