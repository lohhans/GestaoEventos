

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

		<title>Listar Usuarios</title>
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
						      <th scope="col">Nome usuario</th>
						      <th scope="col">Login</th>
						      <th scope="col">Email</th>
						      <th scope="col">CPF</th>
						      <th scope="col">Tipo Usuário</th>


						    </tr>
						  </thead>
				  		<tbody>
							<?php
							$i = 0;
					  			foreach($usuarios as $usuario){
									$i++;
					  		?>
						    <tr>
						      <th scope="row"><?php echo $i ?></th>
							  <td><?php echo $usuario->nome ?></td>
							  <td><?php echo $usuario->login ?></td>
							  <td><?php echo $usuario->email ?></td>
							  <td><?php echo $usuario->cpf ?></td>
							  <td><?php echo $usuario->tipousuario->descricao ?></td>

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


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

	</body>
</html>
