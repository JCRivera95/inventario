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
    public function definition()
    {
        return [
            'sku' => Str::random(6),
            'name' => $this->faker->name(),
            'category_id' => rand(1, 3),
            'description' => $this->faker->realText(100),
            'price' => rand(1, 999),
            'quantity' => rand(1, 100),
            'score' => rand(1, 5),
        ];
    }
}
