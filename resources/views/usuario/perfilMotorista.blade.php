@extends('templates.base')
@section('titulo', 'YourVan | Perfil Motorista')

@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/perfilMotorista.css') }}">
@endsection
@section('content')
    <section class="global">
        <main class="container">
            <div class="container back-button">
                <a href="home" id="btnVoltar"> <img id="back-button" src="{{ asset('storage/assets/img/back-button.png') }}" alt="Voltar"></a>
            </div>
            <div class="perfil-usuario">
                <form action="">
                    <div class="perfil-usuario-header">
                        <div class="perfil-usuario-img">
                            <img src="{{ asset('storage/assets/img/perfil-de-usuario.png') }}" alt="Perfil de Usuário">
                            <span class="nome-perfil-usuario">{{ Auth::user()->nome }}</span>
                        </div>
                        <div class="perfil-usuario-inputs">
                            <div class="form-perfil-usuario">
                                <div>
                                    <label for="">Nome</label>
                                    <input type="text" value="{{Auth::user()->nome}}">
                                </div>
                                <div>
                                    <label for="">Telefone</label>
                                    <input type="text" value="{{ Auth::user()->tel }}">
                                </div>
                                <div>
                                    <label for="">E-mail</label>
                                    <input type="text" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="perfil-usuario-body">
                        <div class="perfil-body-instituicoes w-50">
                            <span class="title-body">Instituições</span>
                            <select class="form-select" multiple aria-label="multiple select example">
                                @foreach($instituicoes as $instituicao)
                                    <option value="{{ $instituicao->id }}" @if(in_array($instituicao->id, $instituicoesAtendidas)) selected @endif>{{ ucfirst($instituicao->nome) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="perfil-body-bairros w-50">
                            <span class="title-body">Bairros</span>
                            <select class="form-select" multiple aria-label="multiple select example">
                                @foreach($bairros as $bairro)
                                <option value="{{ $bairro->id }}" @if(in_array($bairro->id, $bairrosAtendidos)) selected @endif>{{  ucfirst($bairro->nome) }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <section class="titles-footer">
                        <span id="tilte-info-vans">Informações Van</span>
                        <span id="title-zonas">Zonas</span>
                        <span id="title-horarios">Horários</span>
                    </section>
                    <div class="perfil-usuario-footer">
                        <div class="perfil-usuario-info-van">
                            <div class="info-van-spans">
                                <span>Ar Condicionado</span>
                                <span>Wi-fi</span>
                                <span>Van Teto Alto</span>
                                <span>Porta Automática</span>
                                <span>Assistente</span>
                                <span>Poltrona Estofada</span>
                            </div>
                            <div class="info-van-checkbox">
                                <input name="ar_condicionado" @if(Auth::user()->van->ar_condicionado == 1) checked @endif type="checkbox" class="form-check-input">
                                <input name="wifi" @if(Auth::user()->van->wifi == 1) checked @endif type="checkbox" class="form-check-input">
                                <input name="teto_alto" @if(Auth::user()->van->teto_alto == 1) checked @endif type="checkbox" class="form-check-input">
                                <input name="porta_auto" @if(Auth::user()->van->porta_auto == 1) checked @endif type="checkbox" class="form-check-input">
                                <input name="assistente" @if(Auth::user()->van->assistente == 1) checked @endif type="checkbox" class="form-check-input">
                                <input name="poltrona_estofada" @if(Auth::user()->van->poltrona_estofada == 1) checked @endif type="checkbox" class="form-check-input">
                            </div>
                        </div>
                        <div class="perfil-usuario-rotas d-flex justify-content-center align-item-center">
                            <div class="rotas-spans d-flex flex-column">
                                <span>Sul</span>
                                <span>Norte</span>
                                <span>Leste</span>
                                <span>Oeste</span>
                            </div>
                            <div class="rotas-checkbox d-flex flex-column">
                                <input type="checkbox" class="form-check-input">
                                <input type="checkbox" class="form-check-input">
                                <input type="checkbox" class="form-check-input">
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>
                        <div class="perfil-usuario-horarios">
                            <div class="horarios-span d-flex flex-column">
                                <span>Manhã</span>
                                <span>Tarde</span>
                                <span>Noite</span>
                            </div>
                            <horarios class="horarios-checkbox d-flex flex-column">
                                <input type="checkbox" class="form-check-input">
                                <input type="checkbox" class="form-check-input">
                                <input type="checkbox" class="form-check-input">
                            </horarios>
                        </div>
                    </div>
                    <div class="perfil-usuario-botao">
                        <img src="{{ asset('storage/assets/img/edit.png') }}" alt="Editar" class="img-edit">
                        <input type="submit" class="botao-editar" value="Editar">
                    </div>
                </form>
            </div>
        </main>


    </section>
@endsection