@extends('layout.template')

@section('content')

<script type="text/javascript" language="javascript">
</script>

<section class="form-gradient mb5">
    <!-- Basic dropdown -->

    <!-- Espaçamento entre a navbar e o conteudo -->
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastro de Evento') }}</div>

                    <div class="card-body">
                        <form action="/cadastrar/evento" method="post">
                            @csrf

                            <div class="form-group row">
                                <label for="localizacao" class="col-md-4 col-form-label text-md-right">{{ __('Localização') }}</label>

                                <div class="col-md-6">
                                    <input id="localizacao" type="text" class="form-control" name="localizacao" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                                <div class="col-md-6">
                                    <input id="descricao" type="text" class="form-control" name="descricao" required autofocus>
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
                                <label for="dataFim" class="col-md-4 col-form-label text-md-right">{{ __('Área') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="exampleFormControlSelect1" name="area_id">
                                        @foreach($areas as $area)
                                            <option value="{{$area->id}}">{{$area->descricao}}</option>
                                        @endforeach
                                    </select>
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
