<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ClientsSeeder::class,
            HotelSeeder::class,
            HotelReservationSeeder::class,
            DestinationSeeder::class,
            FlightReservationSeeder::class,
            ClassesSeeder::class,
            HotelServiceSeeder::class,
            FlightSeeder::class,
            FlightClassesSeeder::class,
            RoomTypeSeeder::class,
            RoomSeeder::class,
            LayoversSeeder::class,
            OfferServicesSeeder::class,
            HotelOffersSeeder::class,
            FlightOffersSeeder::class,
            AdvertisementSeeder::class,
        ]);
    }
}
