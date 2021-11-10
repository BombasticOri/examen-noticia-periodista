<?php

namespace Database\Factories;

use App\Models\Periodista;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pais' => $this->faker->country(),
            'ciudad' => $this->faker->city(),
            'distrito' => $this->faker->state(),
            'periodista_id' => Periodista::all()->random()->id
        ];
    }
}
