<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [

                'total_price' => 20.30,
                'address' => 'Via del Baffo, 14',
                'is_paid' => 0,
                'phone' => 334958372643093,

            ],
            [
                'total_price' => 5.50,
                'address' => 'Via delle Magnolie, 89',
                'is_paid' => 1,
                'phone' => 334958372642593,

            ],
            [
                'total_price' => 15.30,
                'address' => 'Via calzone, 18',
                'is_paid' => 1,
                'phone' => 334958372642053,

            ],
            [
                'total_price' => 12.50,
                'address' => 'Via Terrasini, 57',
                'is_paid' => 1,
                'phone' => 334958372642033,

            ],
            [
                'total_price' => 19,
                'address' => 'Via Yoshimizu, 90',
                'is_paid' => 1,
                'phone' => 334958372642092,
            ],
            [
                'total_price' => 40.80,
                'address' => 'Via degli Anime, 33',
                'is_paid' => 0,
                'phone' => 334958372642093,
            ],
            [
                'total_price' => 25.30,
                'address' => 'Via dei molti nomi, 5',
                'is_paid' => 0,
                'phone' => 334958372642091,
            ],
        ];

        foreach ($orders as $order) {
            $new_order = new Order();
            $new_order->total_price = $order['total_price'];
            $new_order->address = $order['address'];
            $new_order->is_paid = $order['is_paid'];
            $new_order->phone = $order['phone'];

            $new_order->save();
        }
    }
}
