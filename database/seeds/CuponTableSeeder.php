<?php

use Illuminate\Database\Seeder;

class CuponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cupon = \App\Cupon::create([
            'nombre' => 'Memoria USB',
            'descripcion' => 'Kingston Data Traveler, 64GB, velocidad 3.0',
            'precio' => '150',
            'imagen' => 'ecoimg/cupones/llave01.jpg',
            'categoria_id' => '1',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Batería Portatil ',
            'descripcion' => 'POWERADD Slim2 de 5000mAh',
            'precio' => '500',
            'imagen' => 'ecoimg/cupones/bateria01.jpg',
            'categoria_id' => '1',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Disco Duro Portatíl',
            'descripcion' => 'Toshiba 1TB, USB 3.0',
            'precio' => '750',
            'imagen' => 'ecoimg/cupones/disco01.jpg',
            'categoria_id' => '1',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Papiolas Tosty',
            'descripcion' => 'Queso, 150g',
            'precio' => '25',
            'imagen' => 'ecoimg/cupones/papiolas01.jpg',
            'categoria_id' => '2',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Galletas Chicky',
            'descripcion' => 'Riviana Pozuelo, 12 paquetes individuales',
            'precio' => '40',
            'imagen' => 'ecoimg/cupones/chicky01.jpg',
            'categoria_id' => '2',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Chocolate Milka',
            'descripcion' => 'Oreo, presentación grande',
            'precio' => '30',
            'imagen' => 'ecoimg/cupones/milkaoreo01.jpg',
            'categoria_id' => '2',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Jabon Rinso',
            'descripcion' => 'Hortensias y Flores Blancas, 1.5kg',
            'precio' => '40',
            'imagen' => 'ecoimg/cupones/rinso01.png',
            'categoria_id' => '3',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Cloro Los Conejos',
            'descripcion' => 'Original, 3.750L',
            'precio' => '40',
            'imagen' => 'ecoimg/cupones/cloro01.jpg',
            'categoria_id' => '3',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Desinfectante Sani Pine',
            'descripcion' => 'Fragancia de Pino, 3.750L',
            'precio' => '35',
            'imagen' => 'ecoimg/cupones/sanipine01.jpg',
            'categoria_id' => '3',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Juego de Cubos',
            'descripcion' => 'Stanley, Cubos cortos, 12 a 30 mm, 23 Piezas',
            'precio' => '400',
            'imagen' => 'ecoimg/cupones/cubos01.jpg',
            'categoria_id' => '4',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Juego de Destornilladores',
            'descripcion' => 'Stanley, 20 Piezas, mango regular',
            'precio' => '375',
            'imagen' => 'ecoimg/cupones/destornilladores01.jpg',
            'categoria_id' => '4',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Caja Herramientas',
            'descripcion' => 'Truper, Broches metálicos, Medida: 51x26.6x25cm',
            'precio' => '250',
            'imagen' => 'ecoimg/cupones/cajaherra01.jpg',
            'categoria_id' => '4',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Entradas al Cine',
            'descripcion' => 'Cinemar, entrada doble, **no estrenos**',
            'precio' => '30',
            'imagen' => 'ecoimg/cupones/entradas01.jpg',
            'categoria_id' => '5',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Combo Big Mac',
            'descripcion' => 'Combo Mediano, **Aplica solo en restaurantes**',
            'precio' => '40',
            'imagen' => 'ecoimg/cupones/bigmac01.jpg',
            'categoria_id' => '5',
        ]);

        $cupon = \App\Cupon::create([
            'nombre' => 'Pase Especial Doble',
            'descripcion' => 'Parque de diversiones, **no feriados**',
            'precio' => '80',
            'imagen' => 'ecoimg/cupones/pase01.png',
            'categoria_id' => '5',
        ]);

    }
}
