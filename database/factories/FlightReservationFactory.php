<?php

namespace Database\Factories;

use App\Models\FlightReservation;
use App\Models\Clients;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightReservationFactory extends Factory
{
    protected $model = FlightReservation::class;

    public function definition()
    {
        return [
            'total_price' => $this->faker->randomFloat(2, 100, 1000),
            'client_id' => Clients::factory(),
            'flight_id' => Flight::factory(),
        ];
    }
}
