<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OfferService;
use App\Models\OfferServices;

class OfferServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OfferServices::factory()->count(10)->create();
    }
}
