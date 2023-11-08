@extends('templates.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/cadastroMotorista.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#instituicoes').select2();
            $('#bairros').select2();
        });
    </script>
@endpush

@section('content')
    <section class="global">
        <form method="POST">
            @csrf
            <div class="container container-cadastro">
                <div class="box-cadastro mt-5 flex-column">
                    @if($errors->any())
                        <div class="alert alert-danger w-100 text-center">
                            Preencha todos os campos corretamente!
                        </div>
                    @endif
                    <div class="form-cadastro">
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
                            <select class="form-select mb-5 mt-2" multiple aria-label="multiple select example" name="instituicoes[]" id="instituicoes">
                                @foreach($instituicoes as $instituicao)
                                <option value="{{ $instituicao->id }}">{{ ucfirst($instituicao->nome) }}</option>
                                @endforeach
                            </select>
                            {{-- <span class="subtitle-van">Bairros Atendidos</span>
                            <select class="form-select mt-2" multiple aria-label="multiple select example" name="bairros[]" id="bairros">
                                @foreach($bairros as $bairro)
                                    <option value="{{ $bairro->id }}">{{ $bairro->nome }}</option>
                                @endforeach
                            </select>  --}}
                        </div> 
                    </div>
                    
                    <div class="box-cadastro-botao mt-5">
                        <div class="btn-cadastro mt-5 mb-4 d-flex flex-column align-items-center">
                            <input id="btn-cadastro" type="submit" value="Cadastrar">

                            <a href="/login" class="mt-3">
                                <span>Já possui cadastro?</span>
                            </a>
                        </div> 
                    </div>      
                </div>
            </div>
        </form>
    </section>
@endsection