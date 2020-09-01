<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->change();
            $table->string('lastName')->nullable()->change();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable()->change();
            $table->string('imagen')->nullable()->change();
            $table->string('celular')->nullable()->change();
            $table->string('estado')->nullable()->change();
            $table->string('fechanacimiento')->nullable()->change();
            $table->string('rol')->nullable()->change();
            $table->string('criterio')->nullable()->change();
            $table->string('idioma')->nullable()->change();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
