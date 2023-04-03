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
    }
}
