<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialEntretenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial__entretenimientos', function (Blueprint $table) {
            $table->bigIncrements('id_historial_entretenimiento');
            $table->date('fecha_visto');
            $table->string('visto_en');
            $table->integer('estrellas');
            $table->unsignedBigInteger('id_entretenimiento');

            $table->foreign('id_entretenimiento')
                ->references('id_entretenimiento')
                ->on('entretenimientos')
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
        Schema::dropIfExists('historial__entretenimientos');
    }
}
