<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>cadastrar Usuario</title>
            <meta charset="utf-8">
       	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
            <link rel="stylesheet" href="css/custom.css">

    </head>
    <body>
    	<h1 id = "labelCadastroUsuario" class="display-4 center">Cadastro de Usuário</h1>


        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-2"></div>
				<div class="col-sm-8">
                    <form action="/cadastrar/usuario" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <label for="labelNome">Nome</label>
                            <input name="nome" type="text" class="form-control" id="nome" placeholder="Informe seu nome"></br>

                            <label for="labelLogin">Login</label>
                            <input name="login" type="text" class="form-control" id="login" placeholder="Informe seu CPF"></br>

                            <label for="labelEmail">Email address</label>
                            <input name = "email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu e-mail com ninguém.</small></br>

                            <label for="labelCPF">CPF</label>
                            <input name="cpf" type="text" class="form-control" id="cpf" placeholder="Informe seu CPF"></br>

                            <label for="labelSenha">Senha</label>
                            <input name = "senha" type="password" class="form-control" id="senha" placeholder="Informe sua senha."></br>

                            <label for="labelTipoUsuario">Tipo de Usuário</label>
                            <input name="tipousuario_id" type="text" class="form-control" id="cpf" placeholder="Informe o tipo de usuário"></br>

                            <input type="submit" value="Cadastrar" class="btn btn-primary"/>


                        </div>
                    </form>
                <div/>
            </div>
        </div>

<!-- <select class="form-control">
  <option>Default select</option>
</select> -->


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>



    </body>
</html>
