<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricocomprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicocompras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cdusuario');
            $table->string('idpaquete');
            $table->string('detalles');
            $table->string('metodo_pago');
            $table->string('valor');
            $table->string('fechainicio');
            $table->string('horainicio');
            $table->string('fechavencimiento');
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
        Schema::dropIfExists('historicocompras');
    }
}
