@extends('layout.template')

@section('content')

    <!-- CRUD Area -->
    <section>

        <!-- Espaçamento entre a navbar e o conteudo -->
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>
        <div class="alinha"></div>

        <div class="container text-center">
            <h2 class="text-center text-uppercase text-secondary mb-0">Área</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- CRUDS -->
                    <button type="button" class="btn btn-outline-default waves-effect" onclick="location.href = '/cadastrar/area'">
                        <i class="fa fa-star pr-2" aria-hidden="true"></i>
                        Cadastrar
                    </button>

                    <div class="alinha"></div>

                    <button type="button" class="btn btn-outline-default waves-effect" onclick="location.href = '/atualizar/area'">
                        <i class="fa fa-star pr-2" aria-hidden="true"></i>
                        Atualizar
                    </button>

                    <div class="alinha"></div>

                    <button type="button" class="btn btn-outline-default waves-effect" onclick="location.href = '/remover/area'">
                        <i class="fa fa-star pr-2" aria-hidden="true"></i>
                        Deletar
                    </button>

                    <div class="alinha"></div>

                    <button type="button" class="btn btn-outline-default waves-effect" onclick="location.href = '/listar/areas'">
                        <i class="fa fa-star pr-2" aria-hidden="true"></i>
                        Listar
                    </button>

                </div>
            </div>
        </div>
    </section>

@endsection
