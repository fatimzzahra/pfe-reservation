<?php

namespace Database\Factories;

use App\Models\RoomType;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class RoomTypeFactory extends Factory
{
    protected $model = RoomType::class;
    public function definition()
        {
            return [
                'type_name' => $this->faker->word,
                'description' =>$this->faker->paragraphs(3 , true),
                'number_of_person' =>$this->faker->numberBetween(1, 4),
        ];
        }
}



