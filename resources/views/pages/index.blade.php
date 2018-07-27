@extends('layout.template')

@section('content')

    <!-- Inclusao do header (apresentacao da pagina) -->
    @include('includes.header')

    <section class="portfolio bg-primary text-white mb-0" id="slide">
        <div class="container">
            <h2 class="text-center text-uppercase">Próximos eventos...</h2>
            <hr class="star-light mb-5">
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <!-- <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> -->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">

                            <!-- geracao de bloco no container -->

                            <?php
                            for ($i=1; $i < 7; $i++) {
                            ?>

                            <div class="col-md-6 col-lg-4" >
                                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
                                </a>
                            </div>

                            <?php
                            }
                            ?>

                        </div>
                    </div>

                </div>
            <div class="carousel-item">

                <div class="container" id="blocosEventos">
                    <div class="row">

                        <!-- geracao de bloco no container -->

                        <?php
                        for ($i=1; $i < 7; $i++) {
                        ?>

                        <div class="col-md-6 col-lg-4" >
                            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                                <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                    <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/cake.png" alt="">
                            </a>
                        </div>

                        <?php
                        }
                        ?>

                    </div>
                </div>

            </div>
            <div class="carousel-item">

                <div class="container" id="blocosEventos">
                    <div class="row">

                        <!-- geracao de bloco no container -->

                        <?php
                        for ($i=1; $i < 7; $i++) {
                        ?>

                        <div class="col-md-6 col-lg-4" >
                            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                                <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                                    <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                        <i class="fa fa-search-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="img/portfolio/game.png" alt="">
                            </a>
                        </div>

                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
          </div>
          </br>
          </br>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
    </section>



    <!-- Seção de Contato -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Contate-nos!</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!--Para configurar o endereço de email do formulário de contato, vá para mail/contact_me.php e atualize o endereço de email no arquivo PHP na linha 19. -->
                    <!-- O formulário deve funcionar na maioria dos servidores da Web, mas se o formulário não estiver funcionando, talvez seja necessário configurar o servidor da Web de maneira diferente. -->
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Nome</label>
                                <input class="form-control" id="name" type="text" placeholder="Nome" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Endereço de Email</label>
                                <input class="form-control" id="email" type="email" placeholder="Endereço de Email" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Número para contato</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Número para contato" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Mensagem</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto alinha">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill" href="/cruds">
                            <i class="fa fa-address-card"></i>
                            Inscrever-se
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.rodapeInicio')


@endsection
