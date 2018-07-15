

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

		<title>Listar Inscricoes</title>
	</head>
	<body>

		<div class="container">
			<div class="row justify-content-sm-center">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">

					<table class="table">
					  	<thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">ID Evento</th>
						      <th scope="col">Localização</th>
						      <th scope="col">descricao</th>
						      <th scope="col">Data Inicial</th>
						      <th scope="col">Data Final</th>
                              <th scope="col">Data Pagamento</th>
                              <th scope="col">Area do Conhecimento</th>

						    </tr>
						  </thead>
				  		<tbody>
							<?php
							$i = 0;
					  			foreach($eventos as $evento){
									$i++;
					  		?>
						    <tr>
						      <th scope="row"><?php echo $i ?></th>
							  <td><?php echo $evento->id ?></td>
							  <td><?php echo $evento->localizacao ?></td>
							  <td><?php echo $evento->descricao ?></td>
							  <td><?php echo $evento->dataInicio ?></td>
							  <td><?php echo $evento->dataFim ?></td>
                              <td><?php echo $evento->dataPagamento ?></td>
                              <td><?php echo $evento->Area->descricao ?></td>
						    </tr>
							<?php
							}
							?>

					  	</tbody>
					</table>
				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>

		<h1>Vouchers</h1>

		<div class="container">
			<div class="row justify-content-sm-center">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">

					<table class="table">
					  	<thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">ID Evento</th>
							  <th scope="col">Descricao Evento</th>
						      <th scope="col">ID Voucher</th>
						      <th scope="col">Descricao Voucher</th>

						    </tr>
						  </thead>
				  		<tbody>
							<?php
							$i = 0;
				  			foreach($eventos as $evento){

								$vouchers = $evento->vouchers;
								foreach ($vouchers as $voucher) {

								?>
								<tr>
							      <th scope="row"><?php echo $i ?></th>
								  <td><?php echo $evento->id ?></td>
								  <td><?php echo $evento->descricao ?></td>
								  <td><?php echo $voucher->id ?></td>
								  <td><?php echo $voucher->descricao ?></td>
							    </tr>
								<?php
								}
								?>

							<?php
							}
							?>

					  	</tbody>
					</table>
				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>

		<h1>Usuarios</h1>

		<div class="container">
			<div class="row justify-content-sm-center">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">

					<table class="table">
					  	<thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">ID Evento</th>
							  <th scope="col">Descricao Evento</th>
						      <th scope="col">CPF Usuario</th>
						      <th scope="col">Nome Usuario</th>

						    </tr>
						  </thead>
				  		<tbody>
							<?php
							$i = 0;
				  			foreach($eventos as $evento){

								$usuarios = $evento->usuarios;
								foreach ($usuarios as $usuario) {

								?>
								<tr>
							      <th scope="row"><?php echo $i ?></th>
								  <td><?php echo $evento->id ?></td>
								  <td><?php echo $evento->descricao ?></td>
								  <td><?php echo $usuario->cpf ?></td>
								  <td><?php echo $usuario->nome ?></td>
							    </tr>
								<?php
								}
								?>

							<?php
							}
							?>

					  	</tbody>
					</table>
				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

	</body>
</html>
