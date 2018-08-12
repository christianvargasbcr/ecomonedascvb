<?php

use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $material = \App\Material::create([
            'nombre' => 'Aluminio',
            'precio' => 20,
            'color' => '#ffff00',
            'imagen' => 'ecoimg/materiales/1534031179aluminio.jpg',
        ]);

        $material = \App\Material::create([
            'nombre' => 'Plástico',
            'precio' => 15,
            'color' => '#0000ff',
            'imagen' => 'ecoimg/materiales/1534031180plastico.jpg',
        ]);

        $material = \App\Material::create([
            'nombre' => 'Vidrio',
            'precio' => 25,
            'color' => '#00cc00',
            'imagen' => 'ecoimg/materiales/1534031181vidrio.jpg',
        ]);

        $material = \App\Material::create([
            'nombre' => 'Papel',
            'precio' => 10,
            'color' => '#ffa500',
            'imagen' => 'ecoimg/materiales/1534031182papel.jpg',
        ]);
    }
}
