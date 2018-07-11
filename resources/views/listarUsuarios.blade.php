<!doctype html>
<html>
	<head>
		<title>Listar Usuarios</title>
	</head>
	<body>
		<ul>
		<?php
		foreach($usuarios as $usuario){ 
		?>
		<h1><?php echo "Nome usuario: ".$usuario->nome." - login: ".$usuario->login."Email usuario: ".$usuario->email." - cpf: ".$usuario->cpf . " Tipo Usuario:" . $usuario->tipousuario->descricao . "</h1>";
						
		?></h1>
		<?php
		}
		?>
		</ul>
	</body>
</html>	