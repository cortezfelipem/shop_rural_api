<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Nome do Usuário 1',
            'email' => 'usuario1@example.com',
            'password' => Hash::make('password1'),
        ]);

        User::create([
            'name' => 'Nome do Usuário 2',
            'email' => 'usuario2@example.com',
            'password' => Hash::make('password2'),
        ]);
    }
}
