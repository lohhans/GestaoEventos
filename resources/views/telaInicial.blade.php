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
                    <a href="/" class="brand-logo">Pensalight</a>
                    <a href="" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    <!-- Menu para Desktops -->
                    <ul class="right hide-on-med-and-down">
                        <li><a href="area">Área</a></li>
                        <li><a href="cruds">CRUDS</a></li>
                        <li><a href="evento">Evento</a></li>
                        <li><a href="usuario">Usuário</a></li>
                        <li><a href="voucher">Voucher</a></li>
                    </ul>

                    <!-- Menu para dispositivos móveis -->
                    <ul class="sidenav hide-on-large-only" id="slide-out">
                        <li><a href="area">Área</a></li>
                        <li><a href="cruds">CRUDS</a></li>
                        <li><a href="evento">Evento</a></li>
                        <li><a href="usuario">Usuário</a></li>
                        <li><a href="voucher">Voucher</a></li>
                    </ul>

                </div>
            </nav>

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
