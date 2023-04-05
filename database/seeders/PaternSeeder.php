<?php

namespace Database\Seeders;

use App\Models\Patern;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patern::factory()->count(5)->create();
    }
}
