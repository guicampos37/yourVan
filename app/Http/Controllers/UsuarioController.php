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
}
