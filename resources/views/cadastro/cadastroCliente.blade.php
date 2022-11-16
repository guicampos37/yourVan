@extends('templates.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/cadastroCliente.css') }}">
@endsection

@section('content')
    <section class="global">
        <div class="container container-cadastro">
        <div class="box-cadastro mt-5">
            <div class="form-cadastro">
                <div class="cadastro-title mb-5">
                    <h2>
                        Cadastro de Usuário
                    </h2>
                </div>
                
                <form method="POST">
                    @csrf
                    <div class="input-form">
                        <input type="text" placeholder="Usuário" name="usuario">
                        <input type="password" placeholder="Senha" name="senha">
                        <input type="email" placeholder="Email" name="email">
                        <input type="text" placeholder="CPF" name="cpf">
                        <input type="text" placeholder="Telefone" name="tel">
                    </div>
                    <div class="btn-cadastro mt-5">
                        <input id="btn-cadastro" type="submit" value="Cadastrar">
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="box-logo-cadastro mt-5">
            <div class="logo-cadastro">
                <img src="{{asset('storage/assets/img/logo-yourvan-500.png')}}" alt="logo-yourvan">
                <span>Uma forma simples de aproximar você e seu condutor.</span>
            </div>
        </div>
    </section>
@endsection