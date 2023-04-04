<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users_id = User::pluck('id')->toArray();

        $new_restaurant = new Restaurant();

        $new_restaurant->user_id = $users_id[0];
        $new_restaurant->restaurant_name = 'Admin restaurant';
        $new_restaurant->address = 'Via Boolean, 83';
        $new_restaurant->p_iva = '86334519757';
        $new_restaurant->banner = 'https://picsum.photos/536/354';
        $new_restaurant->vote = 3.4;

        $new_restaurant->save();

        $restaurants = [
            [
                'restaurant_name' => 'Pizzeria Ciro',
                'address' => 'Via del Baffo, 14',
                'p_iva' => '86334519751',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '4.1',
            ],
            [
                'restaurant_name' => 'Al Gelatone',
                'address' => 'Via delle Magnolie, 89',
                'p_iva' => '86334519752',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '2.5',
            ],
            [
                'restaurant_name' => 'Paninoteca Guzza',
                'address' => 'Via calzone, 18',
                'p_iva' => '86334519753',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '3.2',
            ],
            [
                'restaurant_name' => 'Kalos',
                'address' => 'Via Terrasini, 57',
                'p_iva' => '86334519754',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '1.6',
            ],
            [
                'restaurant_name' => 'Sushi Wong',
                'address' => 'Via Yoshimizu, 90',
                'p_iva' => '86334519755',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '3.7',
            ],
            [
                'restaurant_name' => 'Sakura',
                'address' => 'Via degli Anime, 33',
                'p_iva' => '86334519756',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '4.3',
            ],
            [
                'restaurant_name' => 'Da Mindu',
                'address' => 'Via dei molti nomi, 5',
                'p_iva' => '86334519758',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '4.7',
            ],
        ];

        foreach ($restaurants as $restaurant) {
            $new_second_resturant = new Restaurant();
            $new_second_resturant->restaurant_name = $restaurant['restaurant_name'];
            $new_second_resturant->address = $restaurant['address'];
            $new_second_resturant->p_iva = $restaurant['p_iva'];
            $new_second_resturant->banner = $restaurant['banner'];
            $new_second_resturant->vote = $restaurant['vote'];

            $new_second_resturant->save();
        }
    }
}
