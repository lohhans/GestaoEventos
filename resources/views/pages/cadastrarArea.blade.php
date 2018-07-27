@extends('layout.template')

@section('content')

        <!-- Cadastrar Area -->
        <section>

            <!-- Espaçamento entre a navbar e o conteudo -->
            <div class="alinha"></div>
            <div class="alinha"></div>
            <div class="alinha"></div>
            <div class="alinha"></div>

            <div class="container text-center">
                <h2 class="text-center text-uppercase text-secondary mb-0">Cadastrar Área</h2>
                <hr class="star-dark mb-5">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <form>
                            <div class="md-form form-group mt-5">
                                <input type="text" class="form-control" id="formGroupExampleInputMD" placeholder="Example input">
                                <label for="formGroupExampleInputMD"></label>
                            </div>
                        </form>

                        <button type="submit" class="btn btn-outline-default waves-effect">
                            <i class="fa fa-star pr-2" aria-hidden="true"></i>
                            Cadastrar
                        </button>
                    </div>
                </div>
            </div>
        </section>


@endsection
