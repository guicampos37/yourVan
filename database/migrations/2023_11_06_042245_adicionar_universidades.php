<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdicionarUniversidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $universidades = [
            ['nome' => 'Centro Universitário São Camilo SP'],
            ['nome' => 'GSA ENSINO'],
            ['nome' => 'UNOESTE'],
            ['nome' => 'EBRAMEC'],
            ['nome' => 'CBM - Barão de Mauá'],
            ['nome' => 'UniFECAF'],
            ['nome' => 'UNESP'],
            ['nome' => 'UFSCAR']
        ];
    
        DB::table('instituicoes')->insert($universidades);
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instituicoes', function (Blueprint $table) {
            //
        });
    }
}
