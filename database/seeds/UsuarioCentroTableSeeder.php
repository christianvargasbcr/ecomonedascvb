<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioCentroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario_centro')->insert([
            'usuario_id' => 3,
            'centro_id' => 1,
        ]);

        DB::table('usuario_centro')->insert([
            'usuario_id' => 4,
            'centro_id' => 2,
        ]);

        DB::table('usuario_centro')->insert([
            'usuario_id' => 5,
            'centro_id' => 3,
        ]);

        DB::table('usuario_centro')->insert([
            'usuario_id' => 6,
            'centro_id' => 4,
        ]);
    }
}
