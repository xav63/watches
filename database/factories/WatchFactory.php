<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => rand(1,10),
            "brand" => fake()->words(2, true),
            "name" => fake()->words(2, true),
            'picture' => fake()->imageUrl(),
            "date" => fake()->date('Y'),
            "price" => fake()->numberBetween(1000, 2000),
        ];
    }
}
