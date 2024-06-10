<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Infraccion>
 */
class InfraccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo' =>fake()->randomNumber(),
            'reglamenteo' =>fake()->word(),
            'falta' =>fake()->name(),
            'ordenanza' => 'N° '.fake()->name(),
        ]; 
    }
}
