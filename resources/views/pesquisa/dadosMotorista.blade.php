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
                        <span id="nome-motorista">{{ $usuario->nome }}</span>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center ml-3 border border-warning rounded p-2 w-100">
                    <div class="mb-2">
                        <h2>Características Van</h2>
                    </div >
                    <div class="d-flex align-items-center caracs_van">
                        @if($usuario->van->ar_condicionado == 1)
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ asset('storage/assets/img/ar-condicionado.png') }}" alt="Ar condicionado">
                            <span class="text-center">Ar condicionado</span>
                        </div>
                        @endif
                        @if($usuario->van->teto_alto == 1)
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ asset('storage/assets/img/altura.png') }}" alt="Teto alto">
                            <span class="text-center">Teto Alto</span>
                        </div>
                        @endif
                        @if($usuario->van->poltrona_estofada == 1)
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ asset('storage/assets/img/cadeirinha.png') }}" alt="Poltrona Estolfada">
                            <span class="text-center">Poltrona Estofada</span>
                        </div>
                        @endif
                        @if($usuario->van->wifi == 1)
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ asset('storage/assets/img/wi-fi.png') }}" alt="wi-fi">
                            <span class="text-center">Wi-fi</span>
                        </div>
                        @endif
                        @if($usuario->van->assistente == 1)
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ asset('storage/assets/img/secretario.png') }}" alt="Assistente">
                            <span class="text-center">Assistente</span>
                        </div>
                        @endif
                        @if($usuario->van->porta_auto == 1)
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ asset('storage/assets/img/portas-automaticas.png') }}" alt="Porta Automática">
                            <span class="text-center">Portas Automáticas</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="perfil-motorista-zonas d-flex justify-content-center align-item-center">
                <div class="zonas-instituicoes mt-4 d-flex flex-column align-items-center w-100">
                    <span class="titulo-lista">Instituições Atendidas</span>
                    <input type="text" class="form-control w-50" id="filtroInstituicoes" placeholder="Pesquisar instituição...">
                    <ul class="lista-perfil-motorista" id="listaInstituicoes">
                        @foreach($usuario->van->instituicoes as $instituicao)
                            <li>{{ ucfirst($instituicao->nome) }}</li>
                        @endforeach                
                    </ul>
                </div>
            </div>
            <div class="perfil-motorista-buttons">
                <div class="motorista-buttons-actions">
                    <a id="button-contato-motorista" href="https://wa.me/{{ $usuario->tel }}" class="btn btn-primary" target="_blank">Contato</a>
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