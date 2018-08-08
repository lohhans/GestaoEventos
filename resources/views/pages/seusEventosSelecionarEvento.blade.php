@extends('layout.template')

@section('content')

<section class="form-gradient mb5">
    <!-- Basic dropdown -->

    <!-- Espaçamento entre a navbar e o conteudo -->

    <div class="container">
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Selecione seu evento') }}</div>

                    <div class="card-body">
                        <form action="/detalhamento/evento" method="post">
                            @csrf


                            <div class="form-group row">
                                <label for="dataFim" class="col-md-4 col-form-label text-md-right">{{ __('Evento') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="exampleFormControlSelect1" name="evento_id">
                                        @foreach($eventos as $evento)
                                            <option value="{{$evento->id}}">{{$evento->descricao}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Selecionar Evento') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
    <div class="alinha"></div>
</section>
@endsection
