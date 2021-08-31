<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('adminpass'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Cata',
                'email'          => 'catabarle98@gmail.com',
                'password'       => bcrypt('catapass'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
