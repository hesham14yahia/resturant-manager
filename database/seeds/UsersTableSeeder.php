<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hesham Yahia',
            'email' => 'heshamyahia@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
