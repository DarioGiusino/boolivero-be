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

        // restaurant #1
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[0],
            'restaurant_id' => $restaurant_ids[0],
        ]);
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[3],
            'restaurant_id' => $restaurant_ids[0],
        ]);
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[4],
            'restaurant_id' => $restaurant_ids[0],
        ]);

        // restaurant #2
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[0],
            'restaurant_id' => $restaurant_ids[1],
        ]);
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[1],
            'restaurant_id' => $restaurant_ids[1],
        ]);

        // restaurant #3
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[0],
            'restaurant_id' => $restaurant_ids[2],
        ]);
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[2],
            'restaurant_id' => $restaurant_ids[2],
        ]);

        // restaurant #4
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[0],
            'restaurant_id' => $restaurant_ids[3],
        ]);

        // restaurant #5
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[0],
            'restaurant_id' => $restaurant_ids[4],
        ]);
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[3],
            'restaurant_id' => $restaurant_ids[4],
        ]);

        // restaurant #6
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[0],
            'restaurant_id' => $restaurant_ids[5],
        ]);
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[1],
            'restaurant_id' => $restaurant_ids[5],
        ]);

        // restaurant #7
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[0],
            'restaurant_id' => $restaurant_ids[6],
        ]);
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[4],
            'restaurant_id' => $restaurant_ids[6],
        ]);

        // restaurant #8
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[1],
            'restaurant_id' => $restaurant_ids[7],
        ]);
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[2],
            'restaurant_id' => $restaurant_ids[7],
        ]);

        // restaurant #9
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[3],
            'restaurant_id' => $restaurant_ids[8],
        ]);
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[4],
            'restaurant_id' => $restaurant_ids[8],
        ]);

        // restaurant #10
        DB::table('category_restaurant')->insert([
            'category_id' => $category_ids[4],
            'restaurant_id' => $restaurant_ids[9],
        ]);
    }
}
