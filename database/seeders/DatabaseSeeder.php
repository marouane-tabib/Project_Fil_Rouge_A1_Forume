<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(HomeStyleSeeder::class);
        $this->call(MaterailSeeder::class);
        $this->call(PaternSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(ShapeSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(ProductSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
