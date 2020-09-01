<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id_citas');
            $table->string('cedulaprofesional');
            $table->string('servicio');
            $table->string('idusuario');
            $table->string('valorservicio');
            $table->string('duracion');
            $table->string('fecha');
            $table->string('hora');
            $table->string('estado');
            $table->string('validado');
            $table->string('observacion');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
