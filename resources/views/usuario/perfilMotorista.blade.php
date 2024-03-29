@extends('templates.base')
@section('titulo', 'YourVan | Perfil Motorista')

@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/perfilMotorista.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.form-select').select2();
        });
    </script>
@endpush

@section('content')
    {{-- <section class="global">
        <main class="container">
            <div class="container back-button">
                <a href="home" id="btnVoltar"> <img id="back-button" src="{{ asset('storage/assets/img/back-button.png') }}" alt="Voltar"></a>
            </div>
            <div class="perfil-usuario2">
                <form action="/perfil-motorista" method="POST">
                    @csrf
                    <div class="perfil-usuario-header">
                        <div class="perfil-usuario-img">
                            <img src="{{ asset('storage/assets/img/perfil-de-usuario.png') }}" alt="Perfil de Usuário">
                            <span class="nome-perfil-usuario">{{ Auth::user()->nome }}</span>
                        </div>
                        <div class="perfil-usuario-inputs">
                            <div class="form-perfil-usuario">
                                <div>
                                    <label for="">Nome</label>
                                    <input type="text" name="nome" value="{{Auth::user()->nome}}">
                                </div>
                                <div>
                                    <label for="">Telefone</label>
                                    <input type="text" name="tel" value="{{ Auth::user()->tel }}">
                                </div>
                                <div>
                                    <label for="">E-mail</label>
                                    <input type="text" name="email" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="perfil-usuario-body">
                        <div class="perfil-body-instituicoes w-50">
                            <span class="title-body">Instituições</span>
                            <select class="form-select" name="instituicoes[]" multiple aria-label="multiple select example">
                                @foreach($instituicoes as $instituicao)
                                    <option value="{{ $instituicao->id }}" @if(in_array($instituicao->id, $instituicoesAtendidas)) selected @endif>{{ ucfirst($instituicao->nome) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <section class="titles-footer">
                        <span id="tilte-info-vans">Informações Van</span>
                    </section>
                    <div class="perfil-usuario-footer">
                        <div class="perfil-usuario-info-van">
                            <div class="info-van-item">
                                <label for="ar-condicionado">Ar Condicionado</label>
                                <input id="ar-condicionado" name="carac[]" type="checkbox" value="1" class="form-check-input" @if(Auth::user()->van->ar_condicionado == 1) checked @endif>
                            </div>
                            <div class="info-van-item">
                                <label for="wi-fi">Wi-fi</label>
                                <input id="wi-fi" name="carac[]" type="checkbox" value="2" class="form-check-input" @if(Auth::user()->van->wifi == 1) checked @endif>
                            </div>
                            <div class="info-van-item">
                                <label for="van-teto-alto">Van Teto Alto</label>
                                <input id="van-teto-alto" name="carac[]" type="checkbox" value="3" class="form-check-input" @if(Auth::user()->van->teto_alto == 1) checked @endif>
                            </div>
                            <div class="info-van-item">
                                <label for="porta-automatica">Porta Automática</label>
                                <input id="porta-automatica" name="carac[]" type="checkbox" value="4" class="form-check-input" @if(Auth::user()->van->porta_auto == 1) checked @endif>
                            </div>
                            <div class="info-van-item">
                                <label for="assistente">Assistente</label>
                                <input id="assistente" name="carac[]" type="checkbox" value="5" class="form-check-input" @if(Auth::user()->van->assistente == 1) checked @endif>
                            </div>
                            <div class="info-van-item">
                                <label for="poltrona-estofada">Poltrona Estofada</label>
                                <input id="poltrona-estofada" name="carac[]" type="checkbox" value="6" class="form-check-input" @if(Auth::user()->van->poltrona_estofada == 1) checked @endif>
                            </div>
                        </div>
                    </div>
                    <div class="perfil-usuario-botao">
                        <img src="{{ asset('storage/assets/img/edit.png') }}" alt="Editar" class="img-edit">
                        <input type="submit" class="botao-editar" value="Editar">
                    </div>
                </form>
            </div>
        </main>
    </section> --}}
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

    <section class="global">
        <main class="container">
            <div class="container back-button">
                <a href="home" id="btnVoltar"> <img id="back-button" src="{{ asset('storage/assets/img/back-button.png') }}" alt="Voltar"></a>
            </div>

            <form class="d-grid border border-secondary rounded w-75 h-75 p-4" method="POST">
                @csrf
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="perfil-usuario-img">
                            <img src="{{ asset('storage/assets/img/perfil-de-usuario.png') }}" alt="Perfil de Usuário">
                            <span class="nome-perfil-usuario">{{ Auth::user()->nome }}</span>
                        </div>
                    </div>

                    <div class="perfil-usuario-inputs w-50">
                        <div class="form-perfil-usuario">
                            <div>
                                <label for="">Nome</label>
                                <input type="text" name="nome" value="{{Auth::user()->nome}}">
                            </div>
                            <div>
                                <label for="">Telefone</label>
                                <input type="text" name="tel" value="{{ Auth::user()->tel }}">
                            </div>
                            <div>
                                <label for="">E-mail</label>
                                <input type="text" name="email" value="{{ Auth::user()->email }}">
                            </div>
                            <h4 class="disponivel">Disponível ✔</h4>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-5 mb-5">
                    <div class="perfil-usuario-info-van w-25">
                        <div class="info-van-item">
                            <label for="ar-condicionado"><img src="{{ asset('storage/assets/img/ar-condicionado.png') }}" alt="" class="img"> Ar Condicionado</label>
                            <input id="ar-condicionado" name="carac[]" type="checkbox" value="1" class="form-check-input" @if(Auth::user()->van->ar_condicionado == 1) checked @endif>
                        </div>
                        <div class="info-van-item">
                            <label for="wi-fi"><img src="{{ asset('storage/assets/img/wi-fi.png') }}" alt="" class="img"> Wi-fi</label>
                            <input id="wi-fi" name="carac[]" type="checkbox" value="2" class="form-check-input" @if(Auth::user()->van->wifi == 1) checked @endif>
                        </div>
                        <div class="info-van-item">
                            <label for="van-teto-alto"><img src="{{ asset('storage/assets/img/altura.png') }}" alt="" class="img"> Van Teto Alto</label>
                            <input id="van-teto-alto" name="carac[]" type="checkbox" value="3" class="form-check-input" @if(Auth::user()->van->teto_alto == 1) checked @endif>
                        </div>
                        <div class="info-van-item">
                            <label for="porta-automatica"><img src="{{ asset('storage/assets/img/portas-automaticas.png') }}" alt="" class="img"> Porta Automática</label>
                            <input id="porta-automatica" name="carac[]" type="checkbox" value="4" class="form-check-input" @if(Auth::user()->van->porta_auto == 1) checked @endif>
                        </div>
                        <div class="info-van-item">
                            <label for="assistente"><img src="{{ asset('storage/assets/img/secretario.png') }}" alt="" class="img"> Assistente</label>
                            <input id="assistente" name="carac[]" type="checkbox" value="5" class="form-check-input" @if(Auth::user()->van->assistente == 1) checked @endif>
                        </div>
                        <div class="info-van-item">
                            <label for="poltrona-estofada"><img src="{{ asset('storage/assets/img/cadeirinha.png') }}" alt="" class="img"> Poltrona Estofada</label>
                            <input id="poltrona-estofada" name="carac[]" type="checkbox" value="6" class="form-check-input" @if(Auth::user()->van->poltrona_estofada == 1) checked @endif>
                        </div>
                    </div>

                    <div class="perfil-usuario-body w-50">
                        <div class="d-flex flex-column">
                            <span class="title-body">Instituições</span>
                            <select class="form-select" name="instituicoes[]" multiple aria-label="multiple select example">
                                @foreach($instituicoes as $instituicao)
                                    <option value="{{ $instituicao->id }}" @if(in_array($instituicao->id, $instituicoesAtendidas)) selected @endif>{{ ucfirst($instituicao->nome) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="perfil-usuario-botao">
                    <img src="{{ asset('storage/assets/img/edit.png') }}" alt="Editar" class="img-edit">
                    <input type="submit" class="botao-editar" value="Editar">
                </div>
            </div>
        </form>
    </section>
@endsection