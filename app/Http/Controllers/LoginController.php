<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show() {
        if(Auth::check()) {
            return redirect('/home');
        }
        
        return view('login.index');
    }

    public function autenticacao(Request $request) {        
        $user = Usuario::where('email', $request->email)->get()->first();
        
        if($user == null) {
            return redirect('/login')->withErrors(['msg' => 'Email e/ou senha incorretos']);
        }

        if(Hash::check($request->senha, $user->senha)) {
            Auth::login($user);
            if($user->acesso_id == 2) {
                return redirect('/perfil-motorista');                
            }

            return redirect()->intended('/home');
        } else {
            return redirect('/login')->withErrors(['msg' => 'Email e/ou senha incorretos']);
        }
    }

    public function logout() {
        Auth::logout();

        return redirect('/login');
    }
}
