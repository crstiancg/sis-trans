<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tuc>
 */
class TucFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_expedicion' => fake()->date(),
            'fecha_vencimento' => fake()->date(),
            'observacion' => fake()->text(),
            'padron_id' => fake()->randomNumber(1,10),
            'vehiculo_id' => fake()->randomNumber(1,10),
        ];
    }
}
