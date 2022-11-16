<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@home');
// Cadastro usuário comum
Route::get('/cadastro-usuario-comum', 'CadastroController@createUsuarioComum');
Route::post('/cadastro-usuario-comum', 'CadastroController@storeUsuarioComum');

Route::get('/cadastro-usuario-motorista', 'CadastroController@createUsuarioMotorista');
Route::post('/cadastro-usuario-motorista', 'CadastroController@storeUsuarioMotorista');