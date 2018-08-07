<?php

use Illuminate\Database\Seeder;

class CentroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $centro = \App\Centro::create([
            'name' => 'Centro de Acopio Sabana Sur',
            'provincia_id' => 1,
            'direccion' => 'Sabana Sur',
                'telefono' => '21111111',
        ]);

        $centro = \App\Centro::create([
            'name' => 'Centro de Acopio Mercedes Sur',
            'provincia_id' => 4,
            'direccion' => 'Mercedes Sur',
            'telefono' => '22222222',
        ]);

        $centro = \App\Centro::create([
            'name' => 'Centro de Acopio Mercedes Norte',
            'provincia_id' => 4,
            'direccion' => 'Mercedes Norte',
            'telefono' => '23333333',
        ]);

        $centro = \App\Centro::create([
            'name' => 'Centro de Acopio Villa Bonita',
            'provincia_id' => 2,
            'direccion' => 'Villa Bonita',
            'telefono' => '24444444',
        ]);

    }
}
