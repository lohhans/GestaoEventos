@extends('layout.template')

@section('content')
<!doctype html>
<section class="form-gradient mb-5">
    <div class="alinha"></div>
    <div class="alinha"></div>
    </div>
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-1"></div>
    			<div class="col-sm-6">
                    <div class="card">
                        <div class="card-body mx-4">
                        	<h2 class="text-center">Cadastro</h2>
                        </div>
                    </div>
                    <div class="alinha"></div>
                    <div class="alinha"></div>
                    <form action="/cadastrar/usuario" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                            <div class="card">
                                <div class="card-body mx-4">
                                    <div class="md-form">


                                        <i class="fa fa-pencil prefix grey-text"></i>
                                        <input name="nome" type="text" class="form-control" id="nome" placeholder="Informe seu nome"></br>

                                        <input name="login" type="text" class="form-control" id="login" placeholder="Informe seu CPF"></br>

                                        <input name = "email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu e-mail com ninguém.</small></br>

                                        <input name="cpf" type="text" class="form-control" id="cpf" placeholder="Informe seu CPF"></br>

                                        <input name = "password" type="password" class="form-control" id="password" placeholder="Informe sua senha."></br>

                                        <input name="tipousuario_id" type="hidden" value="1" class="form-control" id="tipousuario_id" placeholder="Informe o tipo de usuário"></br>
                                        <input type="submit" class="btn btn-default btn-lg btn-block" value = "cadastrar">
                                            <i class="fa fa-star pr-2" aria-hidden="true"></i>

                                        </input >


                                        <small class="form-text text-muted">

                                            <a class="nav-link py-3 col-sm-3 text-left px-0 px-lg-3 rounded js-scroll-trigger" href="/login">Faça login!</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                    </form>

                <div/>
            </div>
        </div>
    </div>
</section>

@endsection
