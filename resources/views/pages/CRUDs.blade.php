@extends('layout.template')

@section('content')

    <!-- CRUDS -->
    <section id="cruds">

        <!-- Espaçamento entre a navbar e o conteudo -->
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>


        <div class="container text-center">
            <h2 class="text-center text-uppercase text-secondary mb-0">CRUDS</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- CRUDS -->
                    <button type="button" class="btn btn-outline-default waves-effect" onclick="location.href = '/area'">
                        <i class="fa fa-star pr-2" aria-hidden="true"></i>
                        Área
                    </button>

                    <div class="alinha"></div>

                    <button type="button" class="btn btn-outline-default waves-effect" onclick="location.href = '/evento'">
                        <i class="fa fa-star pr-2" aria-hidden="true"></i>
                        Evento
                    </button>

                    <div class="alinha"></div>

                    <button type="button" class="btn btn-outline-default waves-effect" onclick="location.href = '/usuario'">
                        <i class="fa fa-star pr-2" aria-hidden="true"></i>
                        Usuário
                    </button>

                    <div class="alinha"></div>

                    <button type="button" class="btn btn-outline-default waves-effect" onclick="location.href = '/voucher'">
                        <i class="fa fa-star pr-2" aria-hidden="true"></i>
                        Voucher
                    </button>
                </div>
            </div>
        </div>
    </section>
    
@endsection
