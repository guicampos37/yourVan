<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Van;
use App\Instituicao;
use App\AvaliacaoMotorista;
use Illuminate\Support\Facades\Auth;

class PesquisaController extends Controller
{
    public function home() {
        $topRatedDrivers = $this->getTopRatedDrivers();
        return view('pesquisa.home', compact('topRatedDrivers'));       
    }

    public function buscaMotorista(Request $request) {
        $vans = collect($this->buscaPorInst($request->busca));
    
        if($vans->isEmpty()) {
            return redirect('/busca')->withErrors(['msg' => 'Nenhum resultado obtido']);
        }
    
        $vans->transform(function ($van) {
            $mediaNota = AvaliacaoMotorista::where('motorista_id', $van->usuario->id)->avg('nota');
            $van->usuario->mediaNota = $mediaNota !== null ? number_format($mediaNota, 1) : 0; 
            return $van;
        });
    
        $vans = $vans->sortByDesc(function ($van) {
            return $van->usuario->mediaNota !== 'N/A' ? $van->usuario->mediaNota : 0;
        })->values();
    
        session(['vans' => $vans]);
    
        return redirect('/busca');
    }
    
    public function show() {
        return view('pesquisa.show');
    }

    public function buscaPorInst($value) {
        if($value == '') {
            $instituicoes = Instituicao::all();
        } else {
            $instituicoes = Instituicao::where('nome', 'like', '%' . $value . '%')->get();
        }
    
        if($instituicoes->isEmpty()) {
            return null;
        }
    
        $vans = collect();
    
        foreach($instituicoes as $instituicao) {
            foreach($instituicao->vans as $van) {
                $vans->push($van);
            }
        }
    
        return $vans->unique('id')->values()->all();
    }
    

    public function dadosMotorista($id) {
        $usuario = Usuario::with('avaliacoes')->findOrFail($id);
    
        $mediaNota = $usuario->avaliacoes()->avg('nota');
    
        $mediaNota = round($mediaNota, 1);
    
        return view('pesquisa.dadosMotorista', compact('usuario', 'mediaNota'));
    }

    public function getTopRatedDrivers($limit = 5) {
        $topRatedDrivers = Usuario::whereHas('avaliacoes')
            ->with('avaliacoes')
            ->get()
            ->map(function ($driver) {
                $driver->averageRating = $driver->avaliacoes->avg('nota');
                return $driver;
            })
            ->sortByDesc('averageRating')
            ->take($limit);

        return $topRatedDrivers;
    }
}
