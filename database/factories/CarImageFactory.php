<?php

namespace Database\Factories;

use App\Models\CarImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CarImage>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_path' => 'cars/' . fake()->unique()->numberBetween(1, 20) . '.jpg',
            'position' => fake()->numberBetween(1, 20),
        ];
    }
}
