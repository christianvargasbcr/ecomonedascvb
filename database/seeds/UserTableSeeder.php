<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $administrador = \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88888888',
            'password' => Hash::make('123quesO!'),
        ]);

        $centro = \App\User::create([
            'name' => 'Acopio',
            'email' => 'acopio@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88888888',
            'password' => Hash::make('123quesO!'),
        ]);

        $cliente = \App\User::create([
            'name' => 'Cliente',
            'email' => 'cliente@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88888888',
            'password' => Hash::make('123quesO!'),
        ]);
    }
}
