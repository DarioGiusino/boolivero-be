<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class FoodOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $food_ids = Food::pluck('id')->toArray();
        $order_ids = Order::pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) {
            DB::table('food_order')->insert([
                'food_id' => Arr::random($food_ids),
                'order_id' => Arr::random($order_ids),
                'quantity' => rand(1, 5)
            ]);
        }
    }
}
