<?php

namespace Database\Seeders;

use App\Models\Tuc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tuc::factory(10)->create();
    }
}
