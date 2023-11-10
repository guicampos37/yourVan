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
        
        <div id="topRatedDriversCarousel" class="carousel slide mt-3" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($topRatedDrivers as $index => $driver)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ $driver->profile_image ? asset('storage/profiles/' . $driver->profile_image) : asset('storage/assets/img/default-profile.png') }}" alt="Motorista {{ $driver->nome }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $driver->nome }}</h5>
                            <p>Nota Média: {{ number_format($driver->averageRating, 1) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#topRatedDriversCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#topRatedDriversCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </main>
</section>
@endsection