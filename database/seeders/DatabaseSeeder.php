<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarFeature;
use App\Models\CarImage;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        Car::factory()
            ->count(3)
            ->has(CarFeature::factory(), 'feature')
            ->has(CarImage::factory()->count(2), 'images')
            ->create();
    }
}
