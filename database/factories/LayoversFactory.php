<?php
namespace Database\Factories;

use App\Models\Layover;
use App\Models\Layovers;
use Illuminate\Database\Eloquent\Factories\Factory;

class LayoversFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Layovers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'flight_id' => $this->faker->numberBetween(1, 10),
            'destination_id' => $this->faker->numberBetween(1, 20),
            'layover_duration_minutes' => $this->faker->numberBetween(30, 720),
        ];
    }
}
