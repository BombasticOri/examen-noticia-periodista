<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodistaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->firstName('male'|'female'),
            'apellidos' => $this->faker->lastName,
            'edad' => $this->faker->numberBetween(18, 70),
            'especialidad' => $this->faker->sentence(),
            'numerocelular' => $this->faker->randomNumber(9, false),
        ];
    }
}
