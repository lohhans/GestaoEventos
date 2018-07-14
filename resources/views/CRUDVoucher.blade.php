<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <!-- Permite que o navegador saiba que o site é otimizado para mobiles -->
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <!-- Titulo da aba da página -->
        <title>CRUD Voucher - PGE</title>
        <!-- Importa a fonte de ícones do Google -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Importa os arquivos CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css">
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00838F;">
            <a class="navbar-brand" href="#">Pensalight</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cruds">CRUDS</a>
                    </li>
                    <!-- Daqui para baixo não foi implementado a barra! (teste) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <!-- Até aqui! -->
        </nav>

        <h1 class="text-center">Voucher</h1>

        <div class="container">

            <form class="text-center" action="/cadastrar/voucher" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input  type="submit" value="Cadastrar" class="btn btn-primary"/>
            </form></br>

            <form class="text-center" action="/buscar/voucher" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input  type="submit" value="Atualizar" class="btn btn-primary"/>
            </form></br>

            <form class="text-center" action="/deletar/voucher" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input  type="submit" value="Deletar" class="btn btn-primary"/>
            </form></br>

            <form class="text-center" action="/listar/vouchers" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input  type="submit" value="Listar" class="btn btn-primary"/>
            </form></br>
        </div>

        <!-- Importa os arquivos Jquery e JS no fim do body para maior otimização -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>
