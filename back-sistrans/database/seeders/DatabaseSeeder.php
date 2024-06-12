<?php

namespace Database\Seeders;

use App\Models\TipoVehiculo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            TipoVehiculoSeeder::class,
            ModeloSeeder::class,
            TipoServicioSeeder::class,
            MarcaSeeder::class,
            RutaSeeder::class,
            TipoCarroceriaSeeder::class,
            PropietarioSeeder::class,
            InfraccionSeeder::class,
            UitSeeder::class,
            EmpresaSeeder::class,
            VehiculoSeeder::class,
            PadronSeeder::class,
            TucSeeder::class,
            PapeletaSeeder::class,
            ReciboSeeder::class
        ]);
    }
}
