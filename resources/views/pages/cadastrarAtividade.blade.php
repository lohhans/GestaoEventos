@extends('layout.templateDetalhamentoEvento')

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
                    <div class="card-header">{{ __('Cadastro de Atividades') }}</div>

                    <div class="card-body">
                        <form action="/cadastrar/atividade" method="post">
                            @csrf

                            <div class="form-group row">
                                <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                                <div class="col-md-6">
                                    <input id="descricao" type="text" class="form-control" name="descricao" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="valor" class="col-md-4 col-form-label text-md-right">{{ __('Valor') }}</label>

                                <div class="col-md-6">
                                    <input id="valor" type="text" class="form-control" name="valor" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                

                                <div class="col-md-6">
                                    <input id="evento_id" type="hidden" value="{{$evento->id}}"class="form-control" name="evento_id" required autofocus>
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
