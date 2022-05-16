<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_formation' => $this->faker->name,
            'prix' => $this->faker->unique()->numberBetween(1, 20),
            'duree' => $this->faker->unique()->numberBetween(1, 20),
            'description' => $this->faker->sentence,
            'created_at' => now()
        ];
    }
}
