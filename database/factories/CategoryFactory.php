<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // 👈 đổi fake() → $this->faker
            'description' => $this->faker->sentence(),
        ];
    }
}
