<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HotelServices;

class HotelServiceSeeder extends Seeder
{
    public function run()
    {
        HotelServices::factory()->count(10)->create();
        
    }
}
