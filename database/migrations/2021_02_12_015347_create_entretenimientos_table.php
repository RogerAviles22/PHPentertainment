<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntretenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entretenimientos', function (Blueprint $table) {
            $table->bigIncrements('id_entretenimiento');
            $table->string('nombre');
            $table->text('descripcion');
            $table->year('anio_estreno');

            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_espectador');

            $table->foreign('id_categoria')
                ->references('id_categoria')
                ->on('categorias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('id_espectador')
                ->references('id_espectador')
                ->on('espectadors')
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
        Schema::dropIfExists('entretenimientos');
    }
}
