<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Car>
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
            'maker_id' => Maker::query()->inRandomOrder()->first()->id,
            'model_id' => function (array $attributes) {
                return Model::query()->where('maker_id', $attributes['maker_id'])
                    ->inRandomOrder()
                    ->first()
                    ->id;
            },
            'year' => fake()->year(),
            'price' => ((int) fake()->randomFloat(2, 100, 1000)) * 100,
            'vin' => strtoupper(Str::random(17)),
            'mileage' => ((int) fake()->randomFloat(2, 5, 500)) * 100,
            'car_type_id' => CarType::query()->inRandomOrder()->first()->id,
            'fuel_type_id' => FuelType::query()->inRandomOrder()->first()->id,
            'user_id' => User::query()->inRandomOrder()->first()->id,
            'city_id' => City::query()->inRandomOrder()->first()->id,
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'description' => fake()->text(100),
            'published_at' => fake()->optional()
                ->dateTimeBetween('-1 month', '+1 day')
                ?->format('Y-m-d H:i:s'),
        ];
    }
}
