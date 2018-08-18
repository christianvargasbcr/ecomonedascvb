<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = \App\Categoria::create(['nombre' => 'Electrónico']);
        $cat = \App\Categoria::create(['nombre' => 'Comestibles']);
        $cat = \App\Categoria::create(['nombre' => 'Limpieza']);
        $cat = \App\Categoria::create(['nombre' => 'Ferreteria']);
        $cat = \App\Categoria::create(['nombre' => 'Entretenimiento']);
    }
}
