<?php

namespace Database\Factories;

use App\Models\HotelOffer;
use App\Models\HotelOffers;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelOfferFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HotelOffers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'offer_name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'discount_percentage' => $this->faker->randomFloat(2, 0, 100),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'hotel_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
