<?php

use Illuminate\Database\Seeder;

class BilleteraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $billetera = \App\Billetera::create([
            'saldo_canjes'=>'425',
            'saldo_compras'=>'0',
            'saldo_disponible'=>'0',
            'cliente_id'=>'2',
        ]);

        $billetera = \App\Billetera::create([
            'saldo_canjes'=>'270',
            'saldo_compras'=>'0',
            'saldo_disponible'=>'0',
            'cliente_id'=>'7',
        ]);

        $billetera = \App\Billetera::create([
            'saldo_canjes'=>'190',
            'saldo_compras'=>'0',
            'saldo_disponible'=>'0',
            'cliente_id'=>'8',
        ]);

        $billetera = \App\Billetera::create([
            'saldo_canjes'=>'0',
            'saldo_compras'=>'0',
            'saldo_disponible'=>'0',
            'cliente_id'=>'9',
        ]);

        $billetera = \App\Billetera::create([
            'saldo_canjes'=>'0',
            'saldo_compras'=>'0',
            'saldo_disponible'=>'0',
            'cliente_id'=>'10',
        ]);

    }
}
