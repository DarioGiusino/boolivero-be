<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // new users list
        $new_users = [
            [
                'name' => 'Admin',
                'email' => 'admin@boolivero.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Massimo Bottura',
                'email' => 'bufalero@boolivero.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Gualtiero Marchesi',
                'email' => 'vulio@boolivero.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Gianfranco Vissani',
                'email' => 'porcadella@boolivero.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Davide Oldani',
                'email' => 'sesamotrastevere@boolivero.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Cristina Bowerman',
                'email' => 'enobistrot@boolivero.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Carlo Cracco',
                'email' => 'pinsitaly@boolivero.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Antonino Cannavacciuolo',
                'email' => 'trcaffeleone@boolivero.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Alessandro Borghese',
                'email' => 'stupisci@boolivero.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Bruno Barbieri',
                'email' => 'ramesushi@boolivero.com',
                'password' => bcrypt('password'),
            ],
        ];

        // seed db in order
        foreach ($new_users as $new_user) {
            $new_profile_user = new User();

            $new_profile_user->name = $new_user['name'];
            $new_profile_user->email = $new_user['email'];
            $new_profile_user->password = $new_user['password'];

            $new_profile_user->save();
        }
    }
}
