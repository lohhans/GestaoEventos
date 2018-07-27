<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        @include('includes.head')
    </head>

    <body>
        <!-- Inclusao da barra de menu (ainda nao configurada para login) -->
        @include('includes.navbar')

        <!-- Definicao de conteudo da pagina -->
        @yield('content')

        <!-- Inclusao do rodape -->
        @include('includes.footer')
    </body>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mdb.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/freelancer.min.js"></script>
    <script src="js/custom.js"></script>

</html>
