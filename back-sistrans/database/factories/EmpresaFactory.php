<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' => fake()->randomNumber(),
            'ruc' => fake()->randomNumber(),
            'rsocial' => fake()->name(),
            'direccion' => 'Jr. '.fake()->name(),
            'registro' => fake()->name(),
            'acta' => fake()->word(),
            'escritura' => fake()->word(),
            'tipo_vehiculo_id' => fake()->randomNumber(1,10),
            'tipo_servicio_id' => fake()->randomNumber(1,10),
            'ruta_id' => fake()->randomNumber(1,10),
        ];
    }
}
