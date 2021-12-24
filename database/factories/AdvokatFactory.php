<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AdvokatskaKancelarija;

class AdvokatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'brojlicence' => $this->faker->unique()->numerify('######'),
            'email' => $this->faker->unique()->email(),
            'telefon' => $this->faker->unique()->e164PhoneNumber(),
            'kancelarija_id' => AdvokatskaKancelarija::factory()

        ];
    }
}
