<?php

namespace Database\Factories;

use App\Models\HotelReservation;
use App\Models\Client;
use App\Models\Clients;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelReservationFactory extends Factory
{
    protected $model = HotelReservation::class;

    public function definition()
    {
        return [
            'start_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'end_date' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
            'number_of_guests' => $this->faker->numberBetween(1, 5),
            'total_price' => $this->faker->randomFloat(2, 100, 1000),
            'client_id' => Clients::factory(),
            'room_id' => Room::factory(),
        ];
    }
}
