<?php

namespace Database\Factories;

use App\Models\OfferService;
use App\Models\OfferServices;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OfferServices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotel_id' => $this->faker->numberBetween(1, 10),
            'service_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
