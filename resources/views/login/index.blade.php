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

                    @if (session('success'))
                        <div id="success-popup" class="success-popup">
                            {{ session('success') }}
                        </div>
                    @endif
            
                    @if (session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                var popup = document.getElementById('success-popup');
                                popup.style.display = 'block';
                                
                                setTimeout(function() {
                                    popup.style.display = 'none';
                                }, 3000);
                            });
                        </script>
                    @endif
                    
                    <form method="POST">
                        @csrf
                        <div class="input-form">
                            <input type="text" placeholder="Email" name="email">
                            <input type="password" placeholder="Senha" name="senha">
                            @if($errors->any())
                                <span id="msgErro">{{ $errors->first() }}</span>
                            @endif
                        </div>                       

                        <div class="btn-login mt-4">
                            <input id="btn-login" type="submit" value="Entrar">
                        </div>
                        
                        <div class="info-login">
                            <a href="/cadastro-usuario-comum"><span>Cadastre-se</span></a> 
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