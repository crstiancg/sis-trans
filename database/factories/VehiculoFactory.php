<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehiculo>
 */
class VehiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nplaca' => fake()->randomDigitNot(5),
            'motor' => fake()->randomDigitNot(5),
            'serie' => fake()->randomDigitNot(5),
            'nasiento' => fake()->randomNumber(1,5),
            'npuerta' => fake()->randomNumber(1,5),
            'añofabriacion' => fake()->year(),
            'constancia' => fake()->text(),
            'capacidad' => fake()->randomNumber(1,5),
            'color' => fake()->name(),
            'propietario_id' => fake()->randomNumber(1,10),
            'modelo_id' => fake()->randomNumber(1,10),
            'empresa_id' => fake()->randomNumber(1,10),
            'marca_id' => fake()->randomNumber(1,10),
            'tipo_vehiculo_id' => fake()->randomNumber(1,10),
            'tipo_carroceria_id' => fake()->randomNumber(1,10),
        ];
    }
}
