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
                <input class="input-search" type="text" name="busca" placeholder="Busque um motorista por instituição...">
                <button id="btnPesquisa"><img id="img-search" src="{{ asset('storage/assets/img/search.png') }}" alt="Busca"></button>
            </div>

            @if ($errors->any())
                <div class="text-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


        </form>
        @if(Session::get('vans') != null)
            <div class="card-container">
            @foreach(Session::get('vans') as $van)
                <div class="card-search d-flex">
                    <div class="perfil-card">                        
                        <div class="ml-4">
                            <span id="">
                                {{ $van->usuario->mediaNota !== 0 ? $van->usuario->mediaNota : ''}}
                            </span>
                            @if($van->usuario->mediaNota !== 0)
                                <img src="{{ asset('storage/assets/img/estrela.png') }}" alt="Avaliação">
                            @endif
                        </div>
                        <img src="{{ asset('storage/assets/img/perfil-de-usuario.png') }}" alt="Perfil do Motorista" class="img-perfil">
                        <span>{{ $van->usuario->nome }}</span>
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
                                <span id="title-zona-card" class="font-weight-bold">Informações da van:</span>
                                <ul class="zona-card-list">
                                @if($van->ar_condicionado == 1)
                                    <li>Ar Condicionado</li>
                                @endif
    
                                @if($van->teto_alto == 1)
                                    <li>Teto alto</li>
                                @endif
    
                                @if($van->poltrona_estofada == 1)
                                    <li>Poltrona estofada</li>
                                @endif
    
                                @if($van->wifi == 1)
                                    <li>Wifi</li>
                                @endif
    
                                @if($van->assistente == 1)
                                    <li>Assistente</li>
                                @endif
    
                                @if($van->porta_auto == 1)
                                    <li>Porta automatica</li>
                                @endif
                                </ul>
                            </div>
                        </div>
                        <div class="button-card">
                            <a target="_blank" href="/dados-motorista/{{ $van->usuario->id }}"><button id="more-info-card">Mais informações</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        @endif
    </main>
</section>
@endsection