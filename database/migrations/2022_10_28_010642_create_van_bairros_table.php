<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVanBairrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('van_bairros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('van_id');
            $table->unsignedBigInteger('bairro_id');

            $table->foreign('van_id')->references('id')->on('vans');
            $table->foreign('bairro_id')->references('id')->on('bairros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('van_bairros');
    }
}
