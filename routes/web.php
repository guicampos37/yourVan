<?php

Route::get('/', function(){
    return redirect('/home');
});

Route::get('/login', 'LoginController@show')->name('login-usuario');
Route::post('/login', 'LoginController@autenticacao');

// Cadastro usuário comum
Route::get('/cadastro-usuario-comum', 'CadastroController@createUsuarioComum');
Route::post('/cadastro-usuario-comum', 'CadastroController@storeUsuarioComum');

Route::get('/cadastro-usuario-motorista', 'CadastroController@createUsuarioMotorista');
Route::post('/cadastro-usuario-motorista', 'CadastroController@storeUsuarioMotorista');

Route::get('/home', 'PesquisaController@home');
Route::post('/home', 'PesquisaController@buscaMotorista');

Route::get('/busca', 'PesquisaController@show');
Route::post('/busca', 'PesquisaController@buscaMotorista');

Route::middleware(['auth'])->group(function() {
    Route::get('dados-motorista/{id}', 'PesquisaController@dadosMotorista');
    Route::post('/dados-motorista/{motoristaId}', 'UsuarioController@avaliarMotorista');
    Route::post('/logout', 'LoginController@logout');
    Route::get('/perfil-usuario', 'UsuarioController@showUsuarioComum');
    Route::post('/perfil-usuario', 'UsuarioController@updateUsuarioComum');
    Route::get('/perfil-motorista', 'UsuarioController@showUsuarioMotorista');
    Route::post('/perfil-motorista', 'UsuarioController@updateUsuarioMotorista');
});

