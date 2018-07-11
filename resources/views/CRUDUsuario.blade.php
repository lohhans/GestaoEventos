<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      	<title>Usuario</title>
			<link href="css/CRUDS.css" type="text/css" rel="stylesheet">
    </head>
    <body class="body">
    	<h1>Usuario</h1>
    	
    	<form action="/adicionar/usuario" method="get"> 
    		<div class="margem">
    				<a class="labelCRUD">Usuário</a>
    		
    			<input type="hidden" name="_token" value="{{ csrf_token() }}" />    			
    				<input class="botoesCRUD" type="submit" value="Cadastrar" />
    		</form>
    		<form action="/buscar/usuario" method="get"> 
    			<input type="hidden" name="_token" value="{{ csrf_token() }}" />    			
    				<input class="botoesCRUD" type="submit" value="atualizar" />
    		</form>
    		<form action="/deletar/usuario" method="get"> 
    			<input type="hidden" name="_token" value="{{ csrf_token() }}" />    			
    				<input class="botoesCRUD" type="submit" value="deletar" />
    		</form>
    		<form action="/listar/usuarios" method="get"> 
    			<input type="hidden" name="_token" value="{{ csrf_token() }}" />    			
    				<input class="botoesCRUD" type="submit" value="listar" />
    	</div>
    	</form>
    	
	
    </body>
</html>