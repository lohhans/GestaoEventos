<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Usuario</title>

    </head>
    <body>
    	<h1>Usuario</h1>
    	
    	<form action="/adicionar/usuario" method="get"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />    			
    			<input  type="submit" value="Cadastrar" />
    	</form>
    	<form action="/buscar/usuario" method="get"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />    			
    			<input  type="submit" value="atualizar" />
    	</form>
    	<form action="/deletar/usuario" method="get"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />    			
    			<input  type="submit" value="deletar" />
    	</form>
    	
	
    </body>
</html>