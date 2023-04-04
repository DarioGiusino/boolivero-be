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

        $new_second_resturant = new Restaurant();
        $new_second_resturant->user_id = $users_id[1];
        $new_second_resturant->restaurant_name = 'Pizzeria Ciro';
        $new_second_resturant->address = 'Via Boolean, 88';
        $new_second_resturant->p_iva = '86334519758';
        $new_second_resturant->banner = 'https://picsum.photos/536/354';
        $new_second_resturant->vote = 2.4;

        $new_second_resturant->save();

        $new_third_resturant = new Restaurant();
        $new_third_resturant->user_id = $users_id[2];
        $new_third_resturant->restaurant_name = 'Al Gelatone';
        $new_third_resturant->address = 'Via Boolean, 81';
        $new_third_resturant->p_iva = '86334519759';
        $new_third_resturant->banner = 'https://picsum.photos/536/354';
        $new_third_resturant->vote = 4.4;

        $new_third_resturant->save();


        $new_fourth_resturant = new Restaurant();
        $new_fourth_resturant->user_id = $users_id[3];
        $new_fourth_resturant->restaurant_name = 'Paninoteca Guzza';
        $new_fourth_resturant->address = 'Via Boolean, 100';
        $new_fourth_resturant->p_iva = '86334519753';
        $new_fourth_resturant->banner = 'https://picsum.photos/536/354';
        $new_fourth_resturant->vote = 1.2;

        $new_fourth_resturant->save();

        /*$restaurants = [
            [
                
                'restaurant_name' => 'Pizzeria Ciro',
                'user_id' => 1,
                'address' => 'Via del Baffo, 14',
                'p_iva' => '86334519751',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '4.1',
            ],
            [
                'restaurant_name' => 'Al Gelatone',
                'user_id' => 2,
                'address' => 'Via delle Magnolie, 89',
                'p_iva' => '86334519752',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '2.5',
            ],
            [
                'restaurant_name' => 'Paninoteca Guzza',
                'user_id' => 3,
                'address' => 'Via calzone, 18',
                'p_iva' => '86334519753',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '3.2',
            ],
            [
                'restaurant_name' => 'Kalos',
                'user_id' => 0,
                'address' => 'Via Terrasini, 57',
                'p_iva' => '86334519754',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '1.6',
            ],
            [
                'restaurant_name' => 'Sushi Wong',
                'user_id' => 0,
                'address' => 'Via Yoshimizu, 90',
                'p_iva' => '86334519755',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '3.7',
            ],
            [
                'restaurant_name' => 'Sakura',
                'user_id' => 0,
                'address' => 'Via degli Anime, 33',
                'p_iva' => '86334519756',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '4.3',
            ],
            [
                'restaurant_name' => 'Da Mindu',
                'user_id' => 0,
                'address' => 'Via dei molti nomi, 5',
                'p_iva' => '86334519758',
                'banner' => 'https://picsum.photos/536/354',
                'vote' => '4.7',
            ],
        ];*/

        /*foreach ($restaurants as $restaurant) {
            $new_second_resturant = new Restaurant();
            $new_second_resturant->restaurant_name = $restaurant['restaurant_name'];
            $new_second_resturant->user_id = $users_id['user_id'];
            $new_second_resturant->address = $restaurant['address'];
            $new_second_resturant->p_iva = $restaurant['p_iva'];
            $new_second_resturant->banner = $restaurant['banner'];
            $new_second_resturant->vote = $restaurant['vote'];

            $new_second_resturant->save();
        }*/
    }
}
