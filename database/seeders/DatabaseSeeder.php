<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class, RestaurantSeeder::class, CategorySeeder::class, FoodSeeder::class, OrderSeeder::class, CategoryRestaurantSeeder::class]);
    }
}
