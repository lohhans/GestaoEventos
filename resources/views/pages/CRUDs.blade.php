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
            <h2 class="text-center text-uppercase text-secondary mb-0">Paypal</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <button type="button" class="btn btn-outline-default waves-effect" onclick="location.href = '/paypal'">
                        <i class="fa fa-star pr-2" aria-hidden="true"></i>
                        TESTE PAYPAL
                    </button>
                </div>
            </div>
        </div>
    </section>

@endsection
