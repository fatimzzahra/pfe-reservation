<?php

namespace Database\Factories;

use App\Models\HotelServices;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelServiceFactory extends Factory
{
    protected $model = HotelServices::class;

    public function definition()
    {
        return [
            'service_name' => $this->faker->word,
            'description' => $this->faker->sentence,
        ];
    }
}
