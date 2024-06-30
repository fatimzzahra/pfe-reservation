<?php

namespace Database\Factories;

use App\Models\Room;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class RoomFactory extends Factory
{
    protected $model = Room::class;
    public function definition()
        {
            return [
                'hotel_id' => $this->faker->numberBetween(1, 20),
                'room_type_id' =>$this->faker->numberBetween(1, 5), 
                'room_number'  =>$this->faker->unique()->randomNumber(3), 
                'floor' =>$this->faker->unique()->numberBetween(1, 50),
                'price_per_night' =>$this->faker->randomFloat(2, 50, 500),
                'description'  =>$this->faker->paragraphs(3 , true),
        ];
        }
}




