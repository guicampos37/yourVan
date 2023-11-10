<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedMotoristasTable extends Migration
{
    public function up()
    {       
        $motoristasData = [
            [
                'nome' => 'José Francisco',
                'email' => 'jose@hotmail.com',
                'senha' => Hash::make('password'),
                'cpf' => '111.111.111-11',
                'tel' => '15998439327',
                'acesso_id' => 2,
            ],
            [
                'nome' => 'França',
                'email' => 'franca@hotmail.com',
                'senha' => Hash::make('password'),
                'cpf' => '222.222.222-22',
                'tel' => '15994856325',
                'acesso_id' => 2,
            ],
            [
                'nome' => 'Matias',
                'email' => 'matias@hotmail.com',
                'senha' => Hash::make('password'),
                'cpf' => '333.333.333-33',
                'tel' => '15996612526',
                'acesso_id' => 2,
            ],
            [
                'nome' => 'Clodoaldo Silva',
                'email' => 'clodoaldo@hotmail.com',
                'senha' => Hash::make('password'),
                'cpf' => '444.444.444-44',
                'tel' => '15996568599',
                'acesso_id' => 2,
            ],
            [
                'nome' => 'Claudia',
                'email' => 'claudia@hotmail.com',
                'senha' => Hash::make('password'),
                'cpf' => '555.555.555-55',
                'tel' => '15994985658',
                'acesso_id' => 2,
            ],
        ];

        DB::table('usuarios')->insert($motoristasData);

        $vansData = [
            [
                'user_id' => 1,
                'ar_condicionado' => 1,
                'wifi' => 1,
                'teto_alto' => 0,
                'assistente' => 0,
                'poltrona_estofada' => 0
            ],
            [
                'user_id' => 2,
                'ar_condicionado' => 0,
                'wifi' => 0,
                'teto_alto' => 1,
                'assistente' => 1,
                'poltrona_estofada' => 1
            ],
            [
                'user_id' => 3,
                'ar_condicionado' => 1,
                'wifi' => 1,
                'teto_alto' => 0,
                'assistente' => 0,
                'poltrona_estofada' => 1
            ],
            [
                'user_id' => 4,
                'ar_condicionado' => 1,
                'wifi' => 1,
                'teto_alto' => 1,
                'assistente' => 1,
                'poltrona_estofada' => 1
            ],
            [
                'user_id' => 5,
                'ar_condicionado' => 0,
                'wifi' => 1,
                'teto_alto' => 1,
                'assistente' => 1,
                'poltrona_estofada' => 1
            ],
        ];

        DB::table('vans')->insert($vansData);

        $instituicoesData = [
            ['van_id' => 1, 'instituicao_id' => 1],
            ['van_id' => 1, 'instituicao_id' => 12],
            ['van_id' => 1, 'instituicao_id' => 11],
            ['van_id' => 1, 'instituicao_id' => 10],
            ['van_id' => 2, 'instituicao_id' => 9],
            ['van_id' => 2, 'instituicao_id' => 5],
            ['van_id' => 2, 'instituicao_id' => 4],
            ['van_id' => 2, 'instituicao_id' => 7],
            ['van_id' => 3, 'instituicao_id' => 3],
            ['van_id' => 3, 'instituicao_id' => 5],
            ['van_id' => 3, 'instituicao_id' => 10],
            ['van_id' => 3, 'instituicao_id' => 12],
            ['van_id' => 4, 'instituicao_id' => 11],
            ['van_id' => 4, 'instituicao_id' => 2],
            ['van_id' => 4, 'instituicao_id' => 1],
            ['van_id' => 4, 'instituicao_id' => 6],
            ['van_id' => 5, 'instituicao_id' => 4],
            ['van_id' => 5, 'instituicao_id' => 12],
            ['van_id' => 5, 'instituicao_id' => 3],
            ['van_id' => 5, 'instituicao_id' => 10],
        ];

        DB::table('van_instituicoes')->insert($instituicoesData);
    }

    public function down()
    {
        DB::table('van_instituicoes')->whereIn('van_id', [1, 2, 3, 4, 5])->delete();
    
        DB::table('vans')->whereIn('user_id', [1, 2, 3, 4, 5])->delete();
    
        $emails = [
            'jose@hotmail.com',
            'franca@hotmail.com',
            'matias@hotmail.com',
            'clodoaldo@hotmail.com',
            'claudia@hotmail.com',
        ];
        DB::table('usuarios')->whereIn('email', $emails)->delete();
    }
}
