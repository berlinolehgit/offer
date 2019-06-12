<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Oleg Admin',
            'email' => 'olehberlin@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(20),
            'role'=> 'admin',
        ]);

        User::create([
            'name' => 'Igor',
            'email' => 'igor@gmail.com',
            'password' => bcrypt('654321'),
            'remember_token' => str_random(20),
            'role'=> 'maneger',

        ]);

        User::create([
            'name' => 'Dima',
            'email' => 'dima@gmail.com',
            'password' => bcrypt('111111'),
            'remember_token' => str_random(20),
            'role'=> 'maneger',

        ]);
        factory(User::class,10)->create();

    }
}
