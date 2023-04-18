<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {

        for ($i = 0; $i < 30; $i++) {
            $new_order = new Order();

            $new_order->total_price = $faker->numberBetween(0.01, 299.99);
            $new_order->address = $faker->address();
            $new_order->is_paid = $faker->boolean();
            $new_order->phone = $faker->randomNumber(9, true) . $faker->randomNumber(2, true);

            $new_order->save();
        }
    }
}
