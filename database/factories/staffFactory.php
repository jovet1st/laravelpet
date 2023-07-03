<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class staffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $faker = Factory::create();
        $gender = ['Female', 'Male'];

        return [
            'staffName' => $faker->name,
            'staffAddress' => $faker->address,
            'email' => $faker->email,
            'phoneNumber' => $faker->phoneNumber,
            'gender' => $faker->randomElement($gender),
        ];
    }
}
