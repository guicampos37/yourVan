<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('nome');
            $table -> string('senha');
            $table -> string('email');
            $table -> string('cpf');
            $table -> string('tel');
            $table -> unsignedBigInteger('acesso_id');

            $table -> foreign('acesso_id')->references('id')->on('acessos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
