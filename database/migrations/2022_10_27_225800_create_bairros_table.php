<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBairrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bairros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
        });

        DB::table('bairros')->insert(
            [
                array(
                    'id' => 1,
                    'nome' => 'São Bento'
                ),
                array(
                    'id' => 2,
                    'nome' => 'Campolim'
                ),
                array(
                    'id' => 3,
                    'nome' => 'Vila Nova'
                ),
                array(
                    'id' => 4,
                    'nome' => 'Nova Sorocaba'
                )
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bairros');
    }
}
