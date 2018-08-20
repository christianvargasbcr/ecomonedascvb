<?php

use Illuminate\Database\Seeder;

class CanjeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $canje = \App\Canje::create([
            'centro_id'=>1,
            'cliente_id'=>2,
            'total'=>210,
        ]);

        $canje = \App\Canje::create([
            'centro_id'=>1,
            'cliente_id'=>2,
            'total'=>90,
        ]);

        $canje = \App\Canje::create([
            'centro_id'=>1,
            'cliente_id'=>7,
            'total'=>50,
        ]);

        $canje = \App\Canje::create([
            'centro_id'=>1,
            'cliente_id'=>7,
            'total'=>220,
        ]);

        $canje = \App\Canje::create([
            'centro_id'=>2,
            'cliente_id'=>2,
            'total'=>125,
        ]);

        $canje = \App\Canje::create([
            'centro_id'=>2,
            'cliente_id'=>8,
            'total'=>190,
        ]);
    }
}
