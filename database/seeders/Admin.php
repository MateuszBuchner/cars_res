<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'first_name' => 'adminfirst',
            'last_name' => 'adminlast',
            'phone_number' => '123456789',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$suozdUihaGLvnkkuLTroQeY3aN8YgtyKbf.obwff2a84b0ekUY6gC',
            'role' => 'admin',
        ]);
    }
}
