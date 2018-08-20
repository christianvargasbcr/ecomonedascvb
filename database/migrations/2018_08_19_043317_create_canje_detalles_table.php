<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanjeDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canje_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('canje_id')->unsigned();
            $table->integer('material_id')->unsigned();
            $table->integer('cantidad');
            $table->double('monto');
            $table->timestamps();
            $table->foreign('canje_id')
                ->references('id')
                ->on('canjes')
                ->onDelete('cascade');
            $table->foreign('material_id')
                ->references('id')
                ->on('materials')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canje_detalles');
    }
}
