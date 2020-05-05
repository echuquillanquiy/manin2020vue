<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Eduardo Chuquillanqui',
            'username' => 'echuquillanqui',
            'email' => 'echuquillanquiy@gmail.com',
            'dni' => '46589634',
            'role' => 'admin',
            'password' => bcrypt('12345678')
        ]);
    }
}
