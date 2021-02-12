<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneroEntretenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genero__entretenimientos', function (Blueprint $table) {
            $table->bigIncrements('id_genero_entretenimiento');
            
            $table->unsignedBigInteger('id_entretenimiento');
            $table->unsignedBigInteger('id_genero');

            $table->foreign('id_entretenimiento')
                ->references('id_entretenimiento')
                ->on('entretenimientos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_genero')
                ->references('id_genero')
                ->on('generos')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('genero__entretenimientos');
    }
}
