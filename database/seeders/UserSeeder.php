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
        $new_user = new User();
        $new_user->name = 'Admin';
        $new_user->email = 'admin@boolivero.com';
        $new_user->password = bcrypt('password');
        $new_user->save();

        $new_users = [
            [
                'name' => 'Ristoro',
                'email' => 'ristoro@gmail.it',
                'password' => bcrypt('password1'),
            ],
            [
                'name' => 'Food Express',
                'email' => 'ciboveloce@gmail.com',
                'password' => bcrypt('password2'),
            ],
            [
                'name' => 'Luigi',
                'email' => 'pranzo@gmail.com',
                'password' => bcrypt('password3'),
            ],
        ];
        foreach ($new_users as $new_user) {
            $new_profile_user = new User();
            $new_profile_user->name = $new_user['name'];
            $new_profile_user->email = $new_user['email'];
            $new_profile_user->password = $new_user['password'];

            $new_profile_user->save();
        }
    }
}
