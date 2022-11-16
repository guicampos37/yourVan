<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acessos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
        });

        DB::table('acessos')->insert(
            [
                [
                    'id' => 1,
                    'nome' => 'comum'
                ],
                [
                    'id' => 2,
                    'nome' => 'motorista'
                ]
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
        Schema::dropIfExists('acessos');
    }
}
