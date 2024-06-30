<?php

namespace Database\Factories;

use App\Models\Classes;
use App\Models\ClassesModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassesFactory extends Factory
{
    protected $model = Classes::class;

    public function definition()
    {
        return [
            'class_name' => $this->faker->word,
            'description' => $this->faker->sentence,
        ];
    }
}
