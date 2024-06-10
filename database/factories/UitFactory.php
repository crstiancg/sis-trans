<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Uit>
 */
class UitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' =>fake()->name(),
            'monto' => fake()->randomFloat(2, 1000, 10000),
            'anio' =>fake()->year(),
        ];
    }
}
