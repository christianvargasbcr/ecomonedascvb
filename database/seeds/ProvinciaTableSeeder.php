<?php

use Illuminate\Database\Seeder;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincia = \App\Provincia::create([
            'name' => 'San José',
        ]);

        $provincia = \App\Provincia::create([
            'name' => 'Alajuela',
        ]);

        $provincia = \App\Provincia::create([
            'name' => 'Cartago',
        ]);

        $provincia = \App\Provincia::create([
            'name' => 'Heredia',
        ]);

        $provincia = \App\Provincia::create([
            'name' => 'Guanacaste',
        ]);

        $provincia = \App\Provincia::create([
            'name' => 'Puntarenas',
        ]);

        $provincia = \App\Provincia::create([
            'name' => 'Limón',
        ]);
    }
}
