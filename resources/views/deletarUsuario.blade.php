<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Adicionar Usuario</title>

    </head>
    <body>
    	<h1>Deletar Usuario</h1>
    	
    	<form action="/deletar/usuario" method="post"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			cpf: <input type="text" name="cpf" ><br/>    			
    			<input  type="submit" value="deletar" />
    	</form>
    	
	
    </body>
</html>