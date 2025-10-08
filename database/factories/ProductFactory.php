<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true), // 👈 dùng $this->faker
            'price' => $this->faker->numberBetween(10000, 500000),
            'category_id' => Category::factory(),
        ];
    }
}
