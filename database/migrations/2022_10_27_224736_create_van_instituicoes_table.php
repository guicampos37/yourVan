<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVanInstituicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('van_instituicoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('van_id');
            $table->unsignedBigInteger('instituicao_id');

            $table->foreign('van_id')->references('id')->on('vans');
            $table->foreign('instituicao_id')->references('id')->on('instituicoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('van_instituicoes');
    }
}
