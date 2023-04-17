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
        // get every user created
        $users_ids = User::pluck('id')->toArray();

        // restaurants list (one for each user)
        $restaurants = [
            [
                'restaurant_name' => 'Team 5 de "Classe 83"',
                'address' => 'Via Boolean, 83',
                'p_iva' => '83838383838',
                'banner' => 'https://yt3.googleusercontent.com/UXFC9eFKxjbOcUeEiIFqpywdInXJijIrh5bkfUMPlKhCLKaO6rrTfh5O5IzNTS_2Wap2yBk1J44=s900-c-k-c0x00ffffff-no-rj',
                'vote' => '5',
            ],
            [
                'restaurant_name' => 'Bufalero',
                'address' => 'Via Passo del Turchino, 18',
                'p_iva' => '12345678901',
                'banner' => 'https://media-cdn.tripadvisor.com/media/photo-p/1b/61/1a/b8/wagyu.jpg',
                'vote' => '4',
            ],
            [
                'restaurant_name' => 'Vuliò',
                'address' => 'Via degli Scipioni, 55',
                'p_iva' => '12345678902',
                'banner' => 'https://media-cdn.tripadvisor.com/media/photo-s/12/8e/21/58/l-aperipuglia.jpg',
                'vote' => '3',
            ],
            [
                'restaurant_name' => 'Porcadella',
                'address' => 'Via Marcantonio Colonna, 42',
                'p_iva' => '12345678903',
                'banner' => 'https://media-cdn.tripadvisor.com/media/photo-s/1c/44/5b/0c/la-sentenza-out.jpg',
                'vote' => '2',
            ],
            [
                'restaurant_name' => 'Sesamo Trastevere',
                'address' => 'Viale di Trastevere, 83',
                'p_iva' => '12345678904',
                'banner' => 'https://media-cdn.tripadvisor.com/media/photo-s/21/78/42/55/sesamo-trastevere.jpg',
                'vote' => '3',
            ],
            [
                'restaurant_name' => 'DOC Cruderia EnoBistrot',
                'address' => 'Via Pietro Manzi, 1',
                'p_iva' => '12345678905',
                'banner' => 'https://media-cdn.tripadvisor.com/media/photo-s/22/4f/41/f8/le-nostre-specialita.jpg',
                'vote' => '4',
            ],
            [
                'restaurant_name' => 'Pinsitaly Trevi',
                'address' => 'Via della Panetteria, 12',
                'p_iva' => '12345678906',
                'banner' => 'https://media-cdn.tripadvisor.com/media/photo-s/26/c4/88/0c/2nd-year-travellers-choice.jpg',
                'vote' => '1',
            ],
            [
                'restaurant_name' => 'Trecaffè Leone IV',
                'address' => 'Via Leone IV, 10',
                'p_iva' => '12345678907',
                'banner' => 'https://media-cdn.tripadvisor.com/media/photo-s/25/c2/ea/83/amatriciana-con-guanciale.jpg',
                'vote' => '5',
            ],
            [
                'restaurant_name' => 'StuPisci',
                'address' => 'Via Bellinzona, 11',
                'p_iva' => '12345678908',
                'banner' => 'https://media-cdn.tripadvisor.com/media/photo-s/21/96/22/81/stupisci-menu.jpg',
                'vote' => '3',
            ],
            [
                'restaurant_name' => 'Ramè Sushi Naturale Italiano',
                'address' => 'Via Folco Portinari, 33',
                'p_iva' => '12345678909',
                'banner' => 'https://media-cdn.tripadvisor.com/media/photo-s/1c/5b/0b/4b/t.jpg',
                'vote' => '2',
            ],
        ];

        foreach ($restaurants as $key => $restaurant) {
            $new_restaurant = new Restaurant();

            $new_restaurant->user_id = $users_ids[$key];
            $new_restaurant->restaurant_name = $restaurant['restaurant_name'];
            $new_restaurant->address = $restaurant['address'];
            $new_restaurant->p_iva = $restaurant['p_iva'];
            $new_restaurant->banner = $restaurant['banner'];
            $new_restaurant->vote = $restaurant['vote'];

            $new_restaurant->save();
        }
    }
}
