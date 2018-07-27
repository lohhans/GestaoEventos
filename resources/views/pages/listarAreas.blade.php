<!doctype html>
<html>
	<head>
		<title>Listar Areas</title>
	</head>
	<body>
		<ul>
		<?php
		foreach($areas as $area){ 
		?>
		<h1><?php echo "Area: ".$area->descricao?></h1>
		<?php
		}
		?>
		</ul>
	</body>
</html>