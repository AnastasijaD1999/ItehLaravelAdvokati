<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdvokatskaKancelarijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'adresa' => $this->faker->unique()->streetAddress(),
            'email' => $this->faker->unique()->companyEmail(),
            'website' => $this->faker->unique()->url()
        ];
    }
}
