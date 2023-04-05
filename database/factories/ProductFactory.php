<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => 1,
            'primary_color_id' => 1,
            'secondary_color_id' => 2,
            'home_style_id' => 1,
            'image' => fake()->image(),
            'title' => fake()->title(),
            'width' => fake()->numberBetween(2, 40),
            'length' => fake()->numberBetween(2, 40),
            'diameter' => fake()->numberBetween(2, 40),
            'description' => fake()->text(400),
            'price' => fake()->numberBetween(220, 430),
            'quantity' => fake()->numberBetween(5, 40),
            'SKU' => fake()->numberBetween(1, 9),
        ];
    }
}
