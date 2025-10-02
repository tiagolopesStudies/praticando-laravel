<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarFeature;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        CarType::factory()->createMany([
            ['name' => 'Sedan'],
            ['name' => 'Hatchback'],
            ['name' => 'SUV'],
            ['name' => 'Pickup Truck'],
            ['name' => 'Minivan'],
            ['name' => 'Jeep'],
            ['name' => 'Coupe'],
            ['name' => 'Crossover'],
            ['name' => 'Sports Car'],
        ]);

        FuelType::factory()->createMany([
            ['name' => 'Gasoline'],
            ['name' => 'Diesel'],
            ['name' => 'Electric'],
            ['name' => 'Hybrid'],
        ]);

        Model::factory()
            ->count(5)
            ->for(Maker::factory(), 'maker')
            ->create();

        State::factory()
            ->count(5)
            ->has(
                factory: City::factory()->count(3),
                relationship: 'cities'
            )
            ->create();

        Car::factory()
            ->count(5)
            ->has(CarFeature::factory(), 'feature')
            ->has(
                factory: CarImage::factory()
                    ->count(2)
                    ->sequence(fn (Sequence $sequence) => ['position' => $sequence->index + 1]),
                relationship: 'images'
            )
            ->create();
    }
}
