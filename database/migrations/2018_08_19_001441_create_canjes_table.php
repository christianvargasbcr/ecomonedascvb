<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canjes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('centro_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->timestamps();
            $table->foreign('centro_id')
                ->references('id')
                ->on('centros')
                ->onDelete('cascade');
            $table->foreign('cliente_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        DB::statement("ALTER TABLE canjes AUTO_INCREMENT = 100000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canjes');
    }
}
