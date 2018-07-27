<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <!-- Permite que o navegador saiba que o site é otimizado para mobiles -->
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <!-- Titulo da aba da página -->
        <title>Deletar Voucher - PGE</title>
        <!-- Importa a fonte de ícones do Google -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Importa os arquivos CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css">
    </head>

    <body>
    	<h1 class="display-4 center">Deletar Voucher</h1>

        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-2"></div>
				<div class="col-sm-8">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Limite</th>
                                <th scope="col">Percentual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$i = 0;
					  		foreach($vouchers as $voucher){
								$i++;
					  		?>
						    <tr>
                                <th scope="row"><?php echo $i ?></th>
                                <td><?php echo $voucher->id ?></td>
                                <td><?php echo $voucher->descricao ?></td>
                                <td><?php echo $voucher->limite ?></td>
                                <td><?php echo $voucher->percentual ?></td>

						    </tr>
							<?php
							}
							?>
                        </tbody>
                    </table>
                <div/>
            </div>
        </div>

        <!-- Importa os arquivos Jquery e JS no fim do body para maior otimização -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>
