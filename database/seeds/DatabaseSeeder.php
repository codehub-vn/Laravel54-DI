<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\User::insert([
            ['name' => 'User One', 'email' => 'user1@example.net', 'password' => 'abc123'],
            ['name' => 'User Two', 'email' => 'user2@example.net', 'password' => '123456']
        ]);
    }
}
