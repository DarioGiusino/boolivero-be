<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CategoryRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_ids = Category::pluck('id')->toArray();
        $restaurant_ids = Restaurant::pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            DB::table('category_restaurant')->insert([
                'category_id' => Arr::random($category_ids),
                'restaurant_id' => Arr::random($restaurant_ids)
            ]);
        }
    }
}
