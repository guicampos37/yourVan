@extends('templates.base')
@section('titulo', 'Yourvan | Resultado busca')
@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/pesquisa.css') }}">
@endsection

@section('content')
<section class="global">
    <main>
        <form action="/home" method="POST">
            @csrf
            <div class="search-box">
                <input class="input-search" type="text" name="busca" placeholder="Busque por Instituição">
                <button id="btnPesquisa"><img id="img-search" src="{{ asset('storage/assets/img/search.png') }}" alt="Busca"></button>
            </div>
        </form>
        @if(Session::get('vans') != null)
            @foreach(Session::get('vans') as $van)
                <div class="card-search">
                    <div class="perfil-card">
                        <img src="{{ asset('storage/assets/img/perfil-de-usuario.png') }}" alt="perfil-motorista">
                        <span> {{ $van->usuario->nome }}</span>
                    </div>
                    <div class="info-card">
                        <div class="info-van-card">
                            @if($van->ar_condicionado == 1)
                                <img src="{{ asset('storage/assets/img/ar-condicionado.png') }}" alt="Ar condicionado">
                            @endif

                            @if($van->teto_alto == 1)
                                <img src="{{ asset('storage/assets/img/altura.png') }}" alt="Teto alto">
                            @endif

                            @if($van->poltrona_estofada == 1)
                                <img src="{{ asset('storage/assets/img/cadeirinha.png') }}" alt="Poltrona Estolfada">
                            @endif

                            @if($van->wifi == 1)
                                <img src="{{ asset('storage/assets/img/wi-fi.png') }}" alt="wi-fi">
                            @endif

                            @if($van->assistente == 1)
                                <img src="{{ asset('storage/assets/img/secretario.png') }}" alt="Assistente">
                            @endif

                            @if($van->porta_auto == 1)
                                <img src="{{ asset('storage/assets/img/portas-automaticas.png') }}" alt="Porta Automática">
                            @endif
                        </div>
                        <div class="zona-card">
                            <div class="zona-card-horario">
                                <span id="title-zona-card">Horários:</span>
                                <ul class="zona-card-list">
                                    <li class="item-zona-card">Tarde</li>
                                    <li class="item-zona-card">Noite</li>
                                    <li class="item-zona-card">Manhã</li>
                                </ul>
                            </div>
                            <div class="zona-card-regiao">
                                <span id="title-zona-card">Zonas:</span>
                                <ul class="zona-card-list">
                                    <li class="item-zona-card">Sul</li>
                                    <li class="item-zona-card">Norte</li>
                                    <li class="item-zona-card">Leste</li>
                                    <li class="item-zona-card">Oeste</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button-card">
                            <a href="/dados-motorista"><button id="more-info-card">Mais informações</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </main>
</section>
@endsection