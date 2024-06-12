<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recibo>
 */
class ReciboFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nrecibo' =>fake()->randomDigitNot(5),
            'fecha' =>fake()->date(),
            'monto' => fake()->randomFloat(2, 1000, 10000),
            'npapelata' =>fake()->randomDigitNot(10),
            'observacion' =>fake()->text(),
            'papeleta_id' =>fake()->randomNumber(1,10),
        ];
    }
}
