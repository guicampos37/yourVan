<?php

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/login', 'LoginController@show');
Route::post('/login', 'LoginController@autenticacao');

// Cadastro usuário comum
Route::get('/cadastro-usuario-comum', 'CadastroController@createUsuarioComum');
Route::post('/cadastro-usuario-comum', 'CadastroController@storeUsuarioComum');

Route::get('/cadastro-usuario-motorista', 'CadastroController@createUsuarioMotorista');
Route::post('/cadastro-usuario-motorista', 'CadastroController@storeUsuarioMotorista');

Route::middleware(['auth'])->group(function() {
    Route::get('/home', 'PesquisaController@home');
    Route::post('/home', 'PesquisaController@buscaMotorista');
    Route::get('/busca', 'PesquisaController@show');

    Route::post('/logout', 'LoginController@logout');

    Route::get('/perfil-usuario', 'UsuarioController@showUsuarioComum');
    Route::get('/perfil-motorista', 'UsuarioController@showUsuarioMotorista');
});

