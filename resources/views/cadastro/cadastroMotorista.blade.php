@extends('templates.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/cadastroMotorista.css') }}">
@endsection

@section('content')
    <section class="global">
        <form method="POST">
            @csrf
            <div class="container container-cadastro">
                <div class="box-cadastro mt-5 flex-column">
                    <div class="form-cadastro mt-5 ">
                        <div class="cadastro-title mb-5">
                            <h2>
                                Cadastro de Motorista
                            </h2>
                        </div>
                        <div class="dados-pessoais ml-4">
                            <span class="subtitle">
                                Dados Pessoais
                            </span>
                        </div>
                        
                        <div class="input-form">
                            <input type="text" placeholder="Nome Completo" name="usuario">
                            <input type="password" placeholder="Senha" name="senha">
                            <input type="email" placeholder="Email" name="email">
                            <input type="text" placeholder="CPF" name="cpf">
                            <input type="text" placeholder="Telefone" name="tel">
                        </div>
                            
                    </div>
                    <div class="box-cadastro-middle d-flex justify-content-around w-100 mt-5">
                        <span class="subtitle-van">Zonas</span>
                        <span class="subtitle-van">Horários</span>
                    </div>
                    <div class="box-cadastro-van-bottom d-flex justify-content-around w-100">
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
                            <div class="horarios-checkbox d-flex flex-column">
                                <input type="checkbox" class="form-check-input">
                                <input type="checkbox" class="form-check-input">
                                <input type="checkbox" class="form-check-input">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-cadastro-van mt-5 flex-column">
                    <div class="box-cadastro-van-title">
                        <h2>Informações da Van</h2>
                    </div>
                    <div class="box-cadastro-van-top mt-5">
                        <div class="carac-van">
                            <div class="label-carac">
                                <label for="">Ar Condicionado</label>
                                <label for="">Wi-fi</label>
                                <label for="">Van Teto Alto</label>
                                <label for="">Porta Automática</label>
                                <label for="">Assistente</label>
                                <label for="">Poltrona Estofada</label>
                            </div>
                            
                            <div class="radio-carac">
                                <input class="mt-3 form-check-input" type="checkbox" value="1" name="carac[]">
                                <input class="form-check-input" type="checkbox" value="2" name="carac[]">
                                <input class="form-check-input" type="checkbox" value="3" name="carac[]">
                                <input class="form-check-input" type="checkbox" value="4" name="carac[]">
                                <input class="form-check-input" type="checkbox" value="5" name="carac[]">
                                <input class="form-check-input" type="checkbox" value="6" name="carac[]">
                            </div>
                        </div>
                        <div class="rota-van">
                            <span class="subtitle-van">Instituições Atendidas</span>
                            <select class="form-select mb-5 mt-2" multiple aria-label="multiple select example" name="instituicoes[]" id="instituicoes[]">
                                @foreach($instituicoes as $instituicao)
                                <option value="{{ $instituicao->id }}">{{ ucfirst($instituicao->nome) }}</option>
                                @endforeach
                            </select>
                            <span class="subtitle-van">Bairros Atendidos</span>
                            <select class="form-select mt-2" multiple aria-label="multiple select example" name="bairros[]">
                                @foreach($bairros as $bairro)
                                    <option value="{{ $bairro->id }}">{{ $bairro->nome }}</option>
                                @endforeach
                            </select>    
                        </div> 
                    </div>
                    
                    <div class="box-cadastro-botao mt-5">
                        <div class="btn-cadastro mt-5 mb-4">
                            <input id="btn-cadastro" type="submit" value="Cadastrar">
                        </div> 
                    </div>      
                </div>
            </div>
        </form>
    </section>
@endsection