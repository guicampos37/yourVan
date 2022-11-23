@extends('templates.base')
@section('titulo', 'YourVan | Pesquisa Motorista')
@section('css')
    <link rel="stylesheet" href="{{asset('storage/assets/css/motoristaPesquisa.css') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
@endsection
@section('js')
    <script src="{{ asset('storage/assets/js/motoristaPesquisa.js') }}"></script>
@endsection

@section('content')
<section class="global">
    <main>
        <div class="container back-button">
            
            <a href="/home">  <img id="back-button" src="{{ asset('storage/assets/img/back-button.png') }}" alt="Voltar"></a>
        </div>

        <div class="perfil-motorista">
            <div class="perfil-motorista-carac">
                <div class="carac-perfil">
                    <div class="perfil-avaliacao ml-4">
                        <span id="avaliacao-motorista">5</span>
                        <img src="{{ asset('storage/assets/img/estrela.png') }}" alt="Avaliação">
                    </div>
                    <div class="perfil-nome">
                        <img src="{{ asset('storage/assets/img/perfil-de-usuario.png') }}" alt="Perfil Motorista">
                        <span id="nome-motorista">Josias</span>
                    </div>
                </div>
                <div class="carac-van">
                    <div>
                        <img src="{{ asset('storage/assets/img/ar-condicionado.png') }}" alt="Ar condicionado">
                        <span>Ar condicionado</span>
                    </div>
                    <div>
                        <img src="{{ asset('storage/assets/img/altura.png') }}" alt="Teto alto">
                        <span>Teto Alto</span>
                    </div>
                    <div>
                        <img src="{{ asset('storage/assets/img/cadeirinha.png') }}" alt="Poltrona Estolfada">
                        <span>Poltrona Estofada</span>
                    </div>
                    <div>
                        <img src="{{ asset('storage/assets/img/wi-fi.png') }}" alt="wi-fi">
                        <span>Wi-fi</span>
                    </div>
                    <div>
                        <img src="{{ asset('storage/assets/img/secretario.png') }}" alt="Assistente">
                        <span>Assistente</span>
                    </div>
                    <div>
                        <img src="{{ asset('storage/assets/img/portas-automaticas.png') }}" alt="Porta Automática">
                        <span>Portas Automáticas</span>
                    </div>
                </div>
                <div class="carac-horarios">
                    <span class="horarios-perfil">Horários:</span>
                    <ul>
                        <li>Manhã</li>
                        <li>Tarde</li>
                        <li>Noite</li>
                    </ul>
                </div>
            </div>
            <div class="perfil-motorista-zonas d-flex justify-content-between align-item-center">
                <div class="zonas-instituicoes mt-4 ">
                    <span class="titulo-lista">Instituições Atendidas</span>
                    <ul class="lista-perfil-motorista">
                        <li>Facens</li>
                        <li>Unip</li>
                        <li>Uniso</li>
                        <li>Anhanguera</li>                    
                    </ul>
                </div>
                <div class="zonas-bairros mt-4">
                    <span class="titulo-lista">Bairros Atendidos</span>
                    <ul class="lista-perfil-motorista">
                        <li>Campolim</li>
                        <li>Centro</li>
                        <li>Sorocaba Park</li>
                        <li>Vila Leão</li>
                    </ul>
                </div>
            </div>
            <div class="perfil-motorista-buttons">
                <div class="motorista-buttons-actions">
                    <button id="button-contato-motorista">Contato</button>
                    <button id="button-avaliacao-motorista">Avaliar</button>
                </div>

                <div class="modal-avaliacao">
                    <div class="modal-sair">
                        <button>
                            X
                        </button>  
                        <span>Faça sua avaliação!</span>
                        
                    </div>
                    
                    <form action="">
                        <div class="estrelas">
                            <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
                            <label for="cm_star-1"><i class="fa"></i></label>
                            <input type="radio" id="cm_star-1" name="fb" value="1"/>
                            <label for="cm_star-2"><i class="fa"></i></label>
                            <input type="radio" id="cm_star-2" name="fb" value="2"/>
                            <label for="cm_star-3"><i class="fa"></i></label>
                            <input type="radio" id="cm_star-3" name="fb" value="3"/>
                            <label for="cm_star-4"><i class="fa"></i></label>
                            <input type="radio" id="cm_star-4" name="fb" value="4"/>
                            <label for="cm_star-5"><i class="fa"></i></label>
                            <input type="radio" id="cm_star-5" name="fb" value="5"/>
                        </div>
                        <div class="modal-confirmar">
                            <input id="avaliar-submit" type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</section>
@endsection