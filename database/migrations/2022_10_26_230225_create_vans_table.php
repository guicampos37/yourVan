<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('ar_condicionado')->default(0);
            $table->boolean('wifi')->default(0);
            $table->boolean('teto_alto')->default(0);
            $table->boolean('porta_auto')->default(0);
            $table->boolean('assistente')->default(0);
            $table->boolean('poltrona_estofada')->default(0);
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vans');
    }
}
