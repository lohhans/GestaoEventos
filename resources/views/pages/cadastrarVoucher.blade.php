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
                    <div class="card-header">{{ __('Cadastro de Voucher') }}</div>

                    <div class="card-body">
                        <form action="/cadastrar/voucher" method="post">
                            @csrf
                            <input class="form-control" type="hidden" name="evento_id" value="{{$evento->id}}">
                            <input class="form-control" type="hidden" name="codigoIdentificador" value="{{str_random(10)}}">
                            <div class="form-group row">
                                <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                                <div class="col-md-6">
                                    <input id="descricao" type="text" class="form-control" name="descricao" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="limite" class="col-md-4 col-form-label text-md-right">{{ __('Limite de Usuários') }}</label>

                                <div class="col-md-6">
                                    <input id="limite" type="text" class="form-control" name="limite" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="percentual" class="col-md-4 col-form-label text-md-right">{{ __('Percentual') }}</label>

                                <div class="col-md-6">
                                    <input id="percentual" type="text" class="form-control" name="percentual" required autofocus>
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
