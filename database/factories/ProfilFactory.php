<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'numberphone' => $this->faker->phoneNumber,
            'adress' => $this->faker->paragraph,
            'picture' => $this->faker->sentence,
            'created_at' => now()

        ];
    }
}
