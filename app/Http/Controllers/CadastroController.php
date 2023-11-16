<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\Bairro;
use App\Instituicao;
use App\Van;

class CadastroController extends Controller
{
    public function createUsuarioComum() {
        return view('cadastro.cadastroCliente');
    }

    public function storeUsuarioComum(Request $request) {
        $request->validate([
            'usuario' => 'required|max:255',
            'senha' => 'required|min:6',
            'email' => 'required|email|unique:usuarios,email',
            'cpf' => 'required',
            'tel' => 'required',
        ]);

        $senha = $request->senha;
        $hashSenha = Hash::make($senha);

        $newUser = new Usuario();

        $newUser->nome = $request->usuario;
        $newUser->senha = $hashSenha;
        $newUser->email = $request->email;
        $newUser->cpf = $request->cpf;
        $newUser->tel = preg_replace('/\D/', '', $request->tel);
        $newUser->acesso_id = 1;

        $newUser->save();

        return redirect('/login')->with('success', 'Cadastro realizado com sucesso!');
    }

    public function createUsuarioMotorista() {
        $instituicoes = Instituicao::get();
        $bairros = Bairro::get();

        return view('cadastro.cadastroMotorista', compact('instituicoes', 'bairros'));
    }

    public function storeUsuarioMotorista(Request $request) {
        $newUser = new Usuario();

        $request->validate([
            'usuario' => 'required',
            'senha'   => 'required',
            'email'   => 'required|email|unique:usuarios,email',
            'cpf'     => 'required',
            'tel'     => 'required',
            'carac'   => 'required',
            'instituicoes' => 'required|array',
        ]);

        $senha = $request->senha;
        $hashSenha = Hash::make($senha);

        $newUser->nome = $request->usuario;
        $newUser->senha = $hashSenha;
        $newUser->email = $request->email;
        $newUser->cpf = $request->cpf;
        $newUser->tel = preg_replace('/\D/', '', $request->tel);
        $newUser->acesso_id = 2;

        $newUser->save();

        // Nova van
        $caracsVan = $request->carac;

        $newVan = new Van();
        $this->verificaCaracsVan($newVan, $caracsVan);
        $newVan->user_id = $newUser->id;

        $newVan->save();

        $vanInstituicoes = [];
        foreach($request->instituicoes as $instituicao) {
            $vanInstituicao = array(
                'van_id' => $newVan->id,
                'instituicao_id' => $instituicao
            );

            $vanInstituicoes[] = $vanInstituicao;
        }

        DB::table('van_instituicoes')->insert($vanInstituicoes);

        return redirect('/login');
    }

    public function verificaCaracsVan($van, $caracs) {
        if(in_array(1, $caracs)) {
            $van->ar_condicionado = 1;
        }

        if(in_array(2, $caracs)) {
            $van->wifi = 1;
        }

        if(in_array(3, $caracs)) {
            $van->teto_alto = 1;
        }

        if(in_array(4, $caracs)) {
            $van->porta_auto = 1;
        }

        if(in_array(5, $caracs)) {
            $van->assistente = 1;
        }

        if(in_array(6, $caracs)) {
            $van->poltrona_estofada = 1;
        }
    }
}
