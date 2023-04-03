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
        $new_restaurant->banner = '';
        $new_restaurant->vote = 9;

        $new_restaurant->save();
    }
}
