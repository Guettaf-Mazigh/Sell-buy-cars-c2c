<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_id' => fake()->numberBetween(1,67),
            'user_id' => fake()->numberBetween(1,51),
            'price' => fake()->numberBetween(20,900),
            'year' => fake()->numberBetween(2007,2025),
            'motor' => fake()->randomFloat(1,0.8,2.5),
            'energy' => fake()->randomElement(['gasoline','diesel','GPL','electricity','hybrid']),
            'box' => fake()->randomElement(['automatic','manual','semi_automatic']),
            'kilometrage' => fake()->numberBetween(0,600000),
            'Color' => fake()->colorName(),
            'description' => fake()->text()
        ];
    }
}
