@extends('templates.base')
@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/cadastroMotorista.css') }}">
@endsection

@section('content')
    <section class="global">
        <form method="POST">
            @csrf
            <div class="container container-cadastro">
                <div class="box-cadastro mt-5">
                    <div class="form-cadastro mt-5">
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
                        <div class="btn-cadastro mt-5 mb-4">
                            <input id="btn-cadastro" type="submit" value="Cadastrar">
                        </div>    
                    </div>
                </div>
                <div class="box-cadastro-van mt-5">
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
            </div>
        </form>
    </section>
@endsection