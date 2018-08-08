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
            'name' => 'Centro de Acopio Desamparados',
            'provincia_id' => 1,
            'direccion' => 'Villa Olímpica de Desamparados',
            'telefono' => '21111111',
            'correo' => 'centrodesamparados@cvb.com',
            'imagen' => 'ecoimg/centros/1533703617ca_desampa.jpg',
        ]);

        $centro = \App\Centro::create([
            'name' => 'Centro de Acopio Santo Domingo',
            'provincia_id' => 4,
            'direccion' => '100 metros al Este y 700 metros Sur del InBio',
            'telefono' => '22222222',
            'correo' => 'centrosantodomingo@cvb.com',
            'imagen' => 'ecoimg/centros/1533703618ca_sd.jpg',
        ]);

        $centro = \App\Centro::create([
            'name' => 'Centro de Acopio Municipalidad de San Rafael',
            'provincia_id' => 4,
            'direccion' => 'Costado Sur del Parque Central de San Rafael de Heredia',
            'telefono' => '23333333',
            'correo' => 'centrosanrafael@cvb.com',
            'imagen' => 'ecoimg/centros/1533703619ca_sd.jpg',
        ]);

        $centro = \App\Centro::create([
            'name' => 'Centro de Acopio Palmares',
            'provincia_id' => 2,
            'direccion' => 'De la Casa Pastoral de Esquipulas, 75 metros adelante ingresa a la primera calle a mano'.
                ' derecha, sobre esa calle a los 200 metros',
            'telefono' => '24444444',
            'correo' => 'centropalmares@cvb.com',
            'imagen' => 'ecoimg/centros/1533703620ca_sd.jpg',
        ]);

    }
}
