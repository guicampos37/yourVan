@extends('templates.base')
@section('titulo', 'YourVan | Home')
@section('css')
    <link rel="stylesheet" href="{{asset('storage/assets/css/homePage.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')
<section class="global">
    <main class="d-flex">        
        <form method="POST" action="">
            @csrf
            <div class="search-box">
                <input class="input-search" type="text" name="busca" placeholder="Busque por uma Instituição">
                <button id="btnPesquisa" type="submit"><img id="img-search" src="{{ asset('storage/assets/img/search.png') }}" alt="Busca"></button>
            </div>
        </form>   

        <div class="d-flex w-50 mt-5">
            <div class="w-100">
                <h4 class="descricao-texto">"Encontre facilmente o transporte ideal para seu dia a dia acadêmico com a nossa aplicação dedicada a conectar estudantes às melhores opções de vans para universidades.
                Se você está buscando por um transporte confiável e conveniente para a Facens ou qualquer outra instituição, nossa plataforma facilita a pesquisa e te apresenta aos
                motoristas de vans mais bem avaliados e dedicados a atender justamente a sua necessidade. Digite o nome da sua universidade, compare as opções, e escolha o motorista que 
                melhor se encaixa na sua rotina, garantindo uma viagem segura, confortável e pontual para os seus estudos."</h4>
            </div>
        </div>

        <div class="w-100 d-flex">
            <div id="topRatedDriversCarousel" class="carousel slide mt-5 w-50" data-ride="carousel">
                <div class="carousel-inner mt-3 w-100">
                    <div class="text-center">
                        <h3>Lista dos motoristas mais bem avaliados!</h3>
                    </div>
                    @foreach($topRatedDrivers as $index => $driver)
                        <div class="card-motorista-width p-5 carousel-item {{ $index == 0 ? 'active' : '' }}">
                            {{-- <img src="{{ $driver->profile_image ? asset('storage/profiles/' . $driver->profile_image) : asset('storage/assets/img/default-profile.png') }}" alt="Motorista {{ $driver->nome }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $driver->nome }}</h5>
                                <p>Nota Média: {{ number_format($driver->averageRating, 1) }}</p>
                            </div> --}}
                            <div class="d-grid border border-secondary rounded p-2">
                                <div class="d-flex align-items-center">
                                    <div class="w-50 text-center">
                                        <img src="{{ asset('storage/assets/img/perfil-de-usuario.png') }}" class="img-card">
                                        <h5>{{ $driver->nome }}</h5>
                                        <h6>Tel: {{ $driver->tel }}</h6>
                                    </div>
                                    <div class="w-50">
                                        <span>Informações da van:</span>
                                        <ul>
                                            @if($driver->van->ar_condicionado == 1)
                                                <li>Ar condicionado</li>
                                            @endif
                
                                            @if($driver->van->teto_alto == 1)
                                                <li>Teto Alto</li>
                                            @endif
                
                                            @if($driver->van->poltrona_estofada == 1)
                                                <li>Poltrona de estofada</li>
                                            @endif
                
                                            @if($driver->van->wifi == 1)
                                                <li>Wifi</li>
                                            @endif
                
                                            @if($driver->van->assistente == 1)
                                                <li>Assistente</li>
                                            @endif
                
                                            @if($driver->van->porta_auto == 1)
                                                <li>Porta Automática</li>
                                            @endif
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <a href="/dados-motorista/{{ $driver->id }}" class="btn btn-warning mb-3" target="_blank">Ver perfil</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <a class="carousel-control-prev" href="#topRatedDriversCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#topRatedDriversCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>

            <div class="w-50 d-flex flex-column justify-content-center align-items-center mt-5">
                <div class="text-center">
                    <h3>Lista das universidades mais buscadas:</h3>
                </div>
                <div id="instituicoesCarousel" class="carousel slide mt-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/assets/img/facens.jpg') }}" alt="Facens" class="d-block img-carrossel">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="nome-universidade-carrossel">Facens</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/assets/img/fatec.jpg') }}" alt="Fatec" class="d-block img-carrossel">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="nome-universidade-carrossel">Fatec</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/assets/img/unip.jpg') }}" alt="Unip" class="d-block img-carrossel">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="nome-universidade-carrossel">Unip</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#instituicoesCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#instituicoesCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>
    </main>
</section>
@endsection