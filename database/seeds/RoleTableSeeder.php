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
                'create-ca' => true,
                'update-ca' => true,
                'disable-ca' => true,
                'delete-ca' => true,
                'create-mat' => true,
                'update-mat' => true,
                'delete-mat' => true,
                'create-u' => true,
                'update-u' => true,
                'delete-u' => true,
                'create-cup' => true,
                'update-cup' => true,
                'delete-cup' => true,
            ]),
        ]);

        $centroAcopio = \App\Role::create([
            'name' => 'Centro Acopio',
            'permissions' => json_encode([
                'create-can' => true,
                'update-can' => true,
                'delete-can' => true,
            ]),
        ]);

        $cliente = \App\Role::create([
            'name' => 'Cliente',
            'permissions' => json_encode([

            ]),
        ]);
    }
}
