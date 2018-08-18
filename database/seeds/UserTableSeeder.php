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
            'telefono' => '88111111',
            'password' => Hash::make('123quesO!'),
            'role_id' => 1,
        ]);

        $cliente = \App\User::create([
            'name' => 'Cliente 1',
            'email' => 'cliente1@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88222222',
            'password' => Hash::make('123clientE!'),
            'role_id' => 3,
        ]);

        $centro = \App\User::create([
            'name' => 'Admin Desamparados',
            'email' => 'admindesamparados@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88333333',
            'password' => Hash::make('123admiN!'),
            'role_id' => 2,
        ]);

        $centro = \App\User::create([
            'name' => 'Admin Santo Domingo',
            'email' => 'adminsantodomingo@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88444444',
            'password' => Hash::make('123admiN!'),
            'role_id' => 2,
        ]);

        $centro = \App\User::create([
            'name' => 'Admin San Rafael',
            'email' => 'adminsanrafael@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88555555',
            'password' => Hash::make('123admiN!'),
            'role_id' => 2,
        ]);

        $centro = \App\User::create([
            'name' => 'Admin Palmares',
            'email' => 'adminpalmares@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88666666',
            'password' => Hash::make('123admiN!'),
            'role_id' => 2,
        ]);

        $cliente = \App\User::create([
            'name' => 'Cliente 2',
            'email' => 'cliente2@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88777777',
            'password' => Hash::make('123clientE!'),
            'role_id' => 3,
        ]);

        $cliente = \App\User::create([
            'name' => 'Cliente 3',
            'email' => 'cliente3@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88888888',
            'password' => Hash::make('123clientE!'),
            'role_id' => 3,
        ]);

        $cliente = \App\User::create([
            'name' => 'Cliente 4',
            'email' => 'cliente4@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88999999',
            'password' => Hash::make('123clientE!'),
            'role_id' => 3,
        ]);

        $cliente = \App\User::create([
            'name' => 'Cliente 5',
            'email' => 'cliente5@cvb.com',
            'direccion' => 'Costa Rica',
            'telefono' => '88100000',
            'password' => Hash::make('123clientE!'),
            'role_id' => 3,
        ]);
    }
}
