<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dia')->nullable();
            $table->string('HorainicialAM')->nullable();
            $table->string('HorafinalAM')->nullable();
            $table->string('HorainicialPM')->nullable();
            $table->string('HorafinalPM')->nullable();
            $table->string('idprofesional1')->nullable();
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
        Schema::dropIfExists('horario');
    }
}
