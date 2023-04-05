<?php

namespace Database\Seeders;

use App\Models\HomeStyle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeStyle::factory()->count(5)->create();
    }
}
