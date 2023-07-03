<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class petFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'petName' => $this->faker->name,
            'petAge' => $this->faker->randomDigit,
            'petBreed' => $this->faker->lastname,
            'petGender' => $this->faker->randomElement(['male', 'female']),
            'petStatus' => 0,
        ];
    }
}
