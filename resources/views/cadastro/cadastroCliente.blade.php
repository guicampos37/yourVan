@extends('templates.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/cadastroCliente.css') }}">
@endsection

@section('content')
    <section class="global">
        <div class="container container-cadastro">
        <div class="box-cadastro mt-5">
            <div class="form-cadastro">
                <div class="cadastro-title mb-2 mt-3">
                    <h2>
                        Cadastro de Usuário
                    </h2>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger">
                        Preencha todos os campos corretamente.
                    </div>
                @endif
                
                <form method="POST">
                    @csrf
                    <div class="input-form">
                        <input type="text" placeholder="Usuário" name="usuario">
                        <input type="password" placeholder="Senha" name="senha">
                        <input type="email" placeholder="Email" name="email">
                        <input type="text" placeholder="CPF" name="cpf">
                        <input type="text" placeholder="Telefone" name="tel">
                    </div>
                    <div class="btn-cadastro mt-5 flex-column align-items-center">
                        <input id="btn-cadastro" type="submit" value="Cadastrar">

                        <a class="mt-3" href="/login">
                            <span>Já possui cadastro?</span>
                        </a>
                        
                        <a class="mt-3 mb-3" href="/cadastro-usuario-motorista">
                            <span>É um motorista?</span>
                        </a>
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