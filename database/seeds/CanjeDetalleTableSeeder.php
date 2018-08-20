<?php

use Illuminate\Database\Seeder;

class CanjeDetalleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100000,
            'material_id'=>3,
            'cantidad'=>4,
            'monto'=>100,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100000,
            'material_id'=>1,
            'cantidad'=>2,
            'monto'=>40,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100000,
            'material_id'=>2,
            'cantidad'=>4,
            'monto'=>60,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100000,
            'material_id'=>4,
            'cantidad'=>1,
            'monto'=>10,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100001,
            'material_id'=>1,
            'cantidad'=>3,
            'monto'=>60,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100001,
            'material_id'=>2,
            'cantidad'=>2,
            'monto'=>30,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100002,
            'material_id'=>3,
            'cantidad'=>2,
            'monto'=>50,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100003,
            'material_id'=>1,
            'cantidad'=>6,
            'monto'=>120,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100003,
            'material_id'=>4,
            'cantidad'=>1,
            'monto'=>10,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100003,
            'material_id'=>2,
            'cantidad'=>6,
            'monto'=>90,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100004,
            'material_id'=>3,
            'cantidad'=>1,
            'monto'=>25,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100004,
            'material_id'=>1,
            'cantidad'=>2,
            'monto'=>40,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100004,
            'material_id'=>4,
            'cantidad'=>3,
            'monto'=>30,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100004,
            'material_id'=>2,
            'cantidad'=>2,
            'monto'=>30,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100005,
            'material_id'=>3,
            'cantidad'=>4,
            'monto'=>100,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100005,
            'material_id'=>1,
            'cantidad'=>3,
            'monto'=>60,
        ]);

        $detalle = \App\CanjeDetalle::create([
            'canje_id'=>100005,
            'material_id'=>2,
            'cantidad'=>2,
            'monto'=>30,
        ]);
    }
}
