@extends('templates.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('/storage/assets/css/style.css')}}">
@endsection

@section('content')
<section class="global">
    <main>
        <div class="container container-login">
            <div class="box-login mt-5">
                <div class="form-login">
                    <div class="login-title">
                        <h2>
                            Seja Bem Vindo!
                        </h2>
                    </div>
                    
                    <form method="POST">
                        @csrf
                        <div class="input-form">
                            <input type="text" placeholder="Email" name="email">
                            <input type="password" placeholder="Senha" name="senha">
                            @if($errors->any())
                                <span id="msgErro">{{ $errors->first() }}</span>
                            @endif
                        </div>
                       

                        <div class="info-login">
                            <a href=""><span>Esqueceu a senha?</span></a>   
                            <a href=""><span>Cadastre-se</span></a> 
                        </div>

                        <div class="btn-login">
                            <input id="btn-login" type="submit" value="Entrar">
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="box-logo-login mt-5">
                <div class="logo-login">
                    <img src="{{ asset('storage/assets/img/logo-yourvan-500.png') }}" alt="logo-yourvan">
                    <span>Uma forma simples de aproximar você e seu condutor.</span>
                </div>
            </div>
        </div>
    </main>
</section>
@endsection