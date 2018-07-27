<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Usuario</title>

    </head>
    <body>
    	<h1>Usuario</h1>
    	<?php
		foreach($usuarios as $usuario){ 
		?>
    	<form action="/atualizar/usuario" method="post"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			ID: <input type="text" name="id"  value="<?= $usuario->id;?>"><br/>
    			Nome: <input type="text" name="nome"  value="<?= $usuario->nome;?>"><br/>
    			email: <input type="text" name="email" value="<?= $usuario->email;?>"><br/>
    			cpf: <input type="text" name="cpf" value="<?= $usuario->cpf;?>"><br/>
    			login: <input type="text" name="login" value="<?= $usuario->login;?>"><br/>
    			senha <input type="text" name="senha" value="<?= $usuario->senha;?>"><br/>
	    		tipo usuario: <input type="text" name="tipousuario_id" value="<?= $usuario->tipousuario_id;?>"><br/>	
    			
    			<input  type="submit" value="atualizar" />
    	</form>
    	<?php
		}
		?>
    	
	
    </body>
</html>