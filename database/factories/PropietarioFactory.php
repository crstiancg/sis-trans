<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Propietario>
 */
class PropietarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => fake()->randomDigitNot(5),
            'nombres' => fake()->firstNameMale().' '.fake()->lastName(),
            'direccion' => 'Jr. '.fake()->name(),
            'celular' => fake()->phoneNumber(),
            'email' => fake()->freeEmail(),
        ];
    }
}
