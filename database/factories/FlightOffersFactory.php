<?php

namespace Database\Factories;

use App\Models\FlightOffer;
use App\Models\FlightOffers;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightOffersFactory extends Factory
{
    
    protected $model = FlightOffers::class;    
    
    public function definition()
    {
        return [
            'offer_name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'discount_percentage' => $this->faker->randomFloat(2, 0, 100),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'flight_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
