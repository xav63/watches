<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ComplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "watch_id" => rand(1,10),
            "complication" => fake()->randomElement([
                "phase de lune",
                "seconde rattrapante",
                "quantième",
                "heures sautante",
            ])
        ];
    }
}
