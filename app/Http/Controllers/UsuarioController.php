<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Instituicao;
use App\Bairro;

class UsuarioController extends Controller
{
    public function showUsuarioComum() {
        return view('usuario.perfilUsuario');
    }

    public function showUsuarioMotorista() {
        $instituicoes = Instituicao::get();
        $bairros = Bairro::get();
        $instituicoesAtendidas = Auth::user()->van->instituicoes->pluck('id')->toArray();
        $bairrosAtendidos = Auth::user()->van->bairros->pluck('id')->toArray();

        return view('usuario.perfilMotorista', compact('instituicoes', 'bairros', 'instituicoesAtendidas', 'bairrosAtendidos'));
    }

    public function updateUsuarioComum(Request $request) {
        $user = Auth::user();
        $user->nome = $request->nome;
        $user->tel = $request->tel;
        $user->email = $request->email;

        $user->save();

        return redirect('/perfil-usuario')->with('success', 'Perfil atualizado com sucesso!');
    }

    public function updateUsuarioMotorista(Request $request) { 
        $user = Auth::user();
        $user->nome = $request->nome;
        $user->tel = $request->tel;
        $user->email = $request->email;

        $user->save();
    
        $carac = $request->has('carac') ? $request->carac : [];

        $caracAttributes = [
            'ar_condicionado' => in_array(1, $carac) ? 1 : 0,
            'wifi' => in_array(2, $carac) ? 1 : 0,
            'teto_alto' => in_array(3, $carac) ? 1 : 0,
            'porta_auto' => in_array(4, $carac) ? 1 : 0,
            'assistente' => in_array(5, $carac) ? 1 : 0,
            'poltrona_estofada' => in_array(6, $carac) ? 1 : 0,
        ];
    
        $user->van->fill($caracAttributes);
        $user->van->save();
    
        $user->van->instituicoes()->sync($request->input('instituicoes', []));

    
        return redirect('/perfil-motorista')->with('success', 'Perfil atualizado com sucesso!');
    }
    
    
}
