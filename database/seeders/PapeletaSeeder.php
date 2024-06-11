<?php

namespace Database\Seeders;

use App\Models\Papeleta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PapeletaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Papeleta::factory(10)->create();
    }
}
