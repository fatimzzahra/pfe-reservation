<?php

namespace Database\Factories;

use App\Models\FlightClasses;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightClassesFactory extends Factory
{
    protected $model = FlightClasses::class;

    public function definition()
    {
        return [
            'class_name' => $this->faker->word,
            'description' => $this->faker->paragraphs(3, true),
        ];
    }
}
