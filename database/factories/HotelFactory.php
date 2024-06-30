<?php

namespace Database\Factories;

use App\Models\Hotel;
use App\Models\Destination;
use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    protected $model = Hotel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'description' => $this->faker->paragraphs(3, true), 
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'destination_id' => Destination::factory(),
            'hotel_class_id' => Classes::factory(),
        ];
    }
}
