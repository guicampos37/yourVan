@extends('templates.base')
@section('titulo', 'YourVan | Perfil Usuário')
@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/perfilUsuario.css') }}">
@endsection

@section('content')
    <section class="global">
        <main class="container">
            <div class="container back-button">
                <a href="/home" id="btnVoltar"> <img id="back-button" src="{{ asset('storage/assets/img/back-button.png') }}" alt="Voltar"></a>
            </div>
            <div class="perfil-usuario">
                <div class="perfil-usuario-img">
                    <img src="{{ asset('storage/assets/img/perfil-de-usuario.png') }}" alt="Perfil de Usuário">
                    <span class="nome-perfil-usuario">{{Auth::user()->nome}}</span>
                </div>
                <div class="perfil-usuario-inputs">
                    <form action="" class="form-perfil-usuario ">
                        <div>
                            <label for="">Nome</label>
                            <input type="text" value="{{ Auth::user()->nome }}">
                        </div>
                        <div>
                            <label for="">Telefone</label>
                            <input type="text" value="{{ Auth::user()->tel }}">
                        </div>
                        <div>
                            <label for="">E-mail</label>
                            <input type="text" value="{{ Auth::user()->email }}">
                        </div> 
                        <div class="perfil-usuario-editar">
                            <img src="{{ asset('storage/assets/img/edit.png') }}" alt="Editar" id="img-edit">
                            <input type="submit" class="edit-submit" value="Editar">
                        </div> 
                    </form>
                </div>
            </div>
        </main>
    </section>
@endsection
