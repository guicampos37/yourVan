<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
        });

        DB::table('instituicoes')->insert(
            [
                array(
                    'id' => '1',
                    'nome' => 'facens'
                ),
                array(
                    'id' => '2',
                    'nome' => 'uniso'
                ),
                array(
                    'id' => '3',
                    'nome' => 'unip'
                ),
                array(
                    'id' => '4',
                    'nome' => 'anhanguera'
                ),
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
        Schema::dropIfExists('instituicoes');
    }
}
