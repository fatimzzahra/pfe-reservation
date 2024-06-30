<?php

namespace Database\Factories;

use App\Models\Flight;
use App\Models\Destination;
use App\Models\FlightClasses;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    protected $model = Flight::class;

    public function definition()
    {
        $departureAirport = Destination::inRandomOrder()->first();
        $arrivalAirport = Destination::where('id', '!=', $departureAirport->id)->inRandomOrder()->first();

        return [
            'flight_number' => $this->faker->unique()->regexify('[A-Z]{2}[0-9]{3}'),
            'departure_airport_id' => Destination::factory(),
            'arrival_airport_id' => Destination::factory(),
            'departure_time' => $this->faker->dateTimeBetween('now', '+1 month'),
            'arrival_time' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
            'flight_class_id' => FlightClasses::factory(),
            'price' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
