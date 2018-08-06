@extends('layout.templateSeusEventos')

@section('content')

<section class="form-gradient mb5">
    <!-- Basic dropdown -->

    <!-- Espaçamento entre a navbar e o conteudo -->

    <div class="container">
        <div class="alinha"></div>
        <div class="alinha"></div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Cadastro de Evento') }}</div>

                    <div class="card-body">
                        <form action="/cadastrar/evento" method="post">
                            @csrf

                            <div class="form-group row">
                                <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                                <div class="col-md-6">
                                    <input id="descricao" type="text" class="form-control" name="descricao" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="resumoEvento" class="col-md-4 col-form-label text-md-right">{{ __('Informe um resumo do seu evento') }}</label>

                                <div class="col-md-6">
                                    <textarea id="resumoEvento" name="resumoEvento" class="form-control" rows="5" maxlength="999"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dataInicio" class="col-md-4 col-form-label text-md-right">{{ __('Data Inicio') }}</label>

                                <div class="col-md-6">
                                    <input id="dataInicio" type="date" class="form-control" name="dataInicio" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dataFim" class="col-md-4 col-form-label text-md-right">{{ __('Data Fim') }}</label>

                                <div class="col-md-6">
                                    <input id="dataFim" type="date" class="form-control" name="dataFim" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dataFimInscricoes" class="col-md-4 col-form-label text-md-right">{{ __('Data Limite de Inscrições') }}</label>
                                <div class="col-md-6">
                                    <input id="dataFimInscricoes" type="date" class="form-control" name="dataFimInscricoes" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dataFim" class="col-md-4 col-form-label text-md-right">{{ __('Área') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="exampleFormControlSelect1" name="area_id">
                                        @foreach($areas as $area)
                                            <option value="{{$area->id}}">{{$area->descricao}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="labelCep" class="col-md-4 col-form-label text-md-right">{{ __('CEP') }}</label>

                                <div class="col-md-6">
                                    <input id="cep" type="text" class="form-control" name="cep" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelNumero" class="col-md-4 col-form-label text-md-right">{{ __('Numero') }}</label>

                                <div class="col-md-6">
                                    <input id="numero" type="text" class="form-control" name="numero" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelrua" class="col-md-4 col-form-label text-md-right">{{ __('Rua') }}</label>

                                <div class="col-md-6">
                                    <input id="rua" type="text" class="form-control" name="rua" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelBairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>

                                <div class="col-md-6">
                                    <input id="bairro" type="text" class="form-control" name="bairro" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelCidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                                <div class="col-md-6">
                                    <input id="cidade" type="text" class="form-control" name="cidade" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelEstado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                                <div class="col-md-6">
                                    <input id="estado" type="text" class="form-control" name="estado" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelPais" class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label>

                                <div class="col-md-6">
                                    <input id="pais" type="text" class="form-control" name="pais" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="labelComplemento" class="col-md-4 col-form-label text-md-right">{{ __('Complemento') }}</label>

                                <div class="col-md-6">
                                    <input id="complemento" type="text" class="form-control" name="complemento" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Cadastrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
