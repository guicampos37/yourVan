@extends('templates.base')
@section('titulo', 'YourVan | Home')
@section('css')
    <link rel="stylesheet" href="{{asset('storage/assets/css/homePage.css')}}">
@endsection

@section('content')
<section class="global">
    <main>        
        <form method="POST" action="">
            @csrf
            <div class="search-box">
                <input class="input-search" type="text" name="busca" placeholder="Busque por uma Instituição">
                <button id="btnPesquisa" type="submit"><img id="img-search" src="{{ asset('storage/assets/img/search.png') }}" alt="Busca"></button>
            </div>
        </form>
        <div class="fav-inst-box">
            <div class="title-box">
                <h2>Instituições Favoritas</h2>
            </div>
            
        </div>
        <div class="cards-box">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('storage/assets/img/campus.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Facens</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('storage/assets/img/campus.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Uniso</p>
                </div>
            </div>
            <div class="card last-card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('storage/assets/img/campus.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Unip</p>
                </div>
            </div>
        </div>
    
    
        <div class="zone-box">
            <div class="title-box">
                <h2>Encontre Vans por Zona</h2>
            </div>

            <div class="zone-content-box">
                <div class="zone-content-box-left">
                    <div class="zone-oeste zone">
                        <a class="link-dark" href=""> Zona Oeste</a>
                    </div>
                    <div class="zone-leste zone">
                        <a class="link-dark" href=""> Zona Leste</a>
                    </div>
                </div>
                <div class="zone-content-box-right">
                    <div class="zone-sul zone">
                        <a class="link-dark" href=""> Zona Sul</a>
                    </div>
                    <div class="zone-norte zone">
                        <a class="link-dark" href=""> Zona Norte</a>
                    </div>
                </div>
            </div>
        </div>
    
    </main>
    <footer>
        <div class="footer-empresarial">
            <h3>Yourvan</h3>
            <span>Empresa criada com o intuito de facilitar a relação entre condutor e cliente. Nossa missão é acabar com a dificuldade quando se trata de busca por transporte escolar
                e proporcionar a todos uma experiência incrível para que todos consigam ter acesso a educação e consequentemente evoluirmos como sociedade.
            </span>
        </div>
        <div class="footer-inst">
            <h3>Institucional</h3>
            <span><a class="link-dark">Minha Conta</a></span>
        </div>
    </footer>
</section>
@endsection