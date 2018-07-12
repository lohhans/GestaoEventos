<!doctype html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <!-- Permite que o navegador saiba que o site é otimizado para mobiles -->
            <meta name="viewport" content="width-device-width, initial-scale-1.0">
            <!-- Titulo da aba da página -->
            <title>Pensalight</title>
            <!-- Importa a fonte de ícones do Google -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!-- Importa o Materialize CSS -->
            <link rel="stylesheet" href="css/materialize.css">
        </head>

        <body>

            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo resposive">Pensalight</a>
                    <a href="" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    <!-- Menu para Desktops -->
                    <ul class="right hide-on-med-and-down">
                        <li><a href="area">Área</a></li>
                        <li><a href="evento">Evento</a></li>
                        <li><a href="usuario">Usuário</a></li>
                        <li><a href="voucher">Voucher</a></li>
                    </ul>

                    <!-- Menu para dispositivos móveis -->
                    <ul class="sidenav hide-on-large-only" id="slide-out">
                        <li><a href="area">Área</a></li>
                        <li><a href="evento">Evento</a></li>
                        <li><a href="usuario">Usuário</a></li>
                        <li><a href="voucher">Voucher</a></li>
                    </ul>

                </div>
            </nav>

            <h1>Cadastrar Evento</h1>

            <form action="/cadastrar/evento" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                Localizacao: <input type="text" name="localizacao" ><br/>
                Descricao: <input type="text" name="descricao" ><br/>
                Data inicial: <input type="datetime" name="dataInicio" ><br/>
                Data final: <input type="datetime" name="dataFim" ><br/>
                Data de pagamento: <input type="datetime" name="dataPagamento" ><br/>
                Codigo da area: <input type="text" name="area_id" ><br/>

                <input  type="submit" value="cadastrar" />
            </form>

            <!-- Importa os arquivos Jquery e JS -->
            <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="js/materialize.min.js"></script>

            <!-- Importa o Materialize JS -->
            <script src="js/materialize.js"></script>

            <!-- Configura o Jquery o Materialize JS -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.sidenav').sidenav();
                });
            </script>

        </body>

    </html>
<!-- AINDA IMPLEMENTANDO, MAS O DEFAULT PRAS TELAS É ESSE! -->
