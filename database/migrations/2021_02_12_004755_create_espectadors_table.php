<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspectadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espectadors', function (Blueprint $table) {
            $table->bigIncrements('id_espectador');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('usuario')->unique();
            $table->string('clave');
            $table->tinyInteger('estado');
            $table->date('dia_nacimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espectadors');
    }
}
