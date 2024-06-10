<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Papeleta>
 */
class PapeletaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'npapeletas' => fake()->randomDigitNot(5),
           'placa' => fake()->swiftBicNumber(),
           'conductor' => fake()->firstNameMale().' '. fake()->lastName(),
           'uit_id' => fake()->randomNumber(1,10),
           'infraccion_id' => fake()->randomNumber(1,10),
           'vehiculo_id' => fake()->randomNumber(1,10),
        ];
    }
}
