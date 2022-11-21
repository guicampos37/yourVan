<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Van;
use App\Instituicao;
use Illuminate\Support\Facades\Auth;

class PesquisaController extends Controller
{
    public function home() {
        $user = Auth::user();

        if($user != null) {
            return view('pesquisa.home');
        }

        return redirect('/login');
    }

    public function buscaMotorista(Request $request) {
        $vans = $this->buscaPorInst($request->busca);
        
        if($vans == null) {
            return redirect('/home')->withErrors(['msg' => 'Nenhum resultado obtido']);
        }

        return redirect('/busca')->with(['vans' => $vans]);
    }

    public function show() {
        return view('pesquisa.show');
    }

    public function buscaPorInst($value){
        if($value == '') {
            $instituicoes = Instituicao::get();
        } else {
            $instituicoes = Instituicao::where('nome', 'like', $value . '%')->get();
        }

        if($instituicoes == null) {
            return null;
        }

        $arrayVans = [];

        foreach($instituicoes as $instituicao) {
            foreach($instituicao->vans as $van) {
                $arrayVans[] = $van;
            }
        }

        return $arrayVans;
    }
}
