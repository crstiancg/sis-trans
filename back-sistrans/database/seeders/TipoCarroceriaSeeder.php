<?php

namespace Database\Seeders;

use App\Models\TipoCarroceria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoCarroceriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoCarroceria::factory(10)->create();
    }
}
