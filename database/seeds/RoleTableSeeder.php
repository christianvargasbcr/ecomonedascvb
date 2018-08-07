<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador = \App\Role::create([
            'name' => 'Administrador',
            'permissions' => json_encode([
                'view-all-ca' => true,
                'create-ca' => true,
                'update-ca' => true,
                'disable-ca' => true,
                'delete-ca' => true,
                'view-all-ma' => true,
                'create-mat' => true,
                'update-mat' => true,
                'delete-mat' => true,
                'view-all-usr' => true,
                'create-usr' => true,
                'update-usr' => true,
                'delete-usr' => true,
                'view-all-cup' => true,
                'create-cup' => true,
                'update-cup' => true,
                'delete-cup' => true,
            ]),
        ]);

        $centroAcopio = \App\Role::create([
            'name' => 'Centro Acopio',
            'permissions' => json_encode([

            ]),
        ]);

        $cliente = \App\Role::create([
            'name' => 'Cliente',
            'permissions' => json_encode([

            ]),
        ]);
    }
}
