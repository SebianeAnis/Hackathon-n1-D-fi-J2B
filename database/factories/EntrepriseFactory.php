<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_entreprise' => $this->faker->name,
            'telephone' => $this->faker->phoneNumber,
            'siret' => $this->faker->unique()->numberBetween(1, 20),
            'adresse' => $this->faker->sentence,
            'created_at' => now()

        ];
    }
}
