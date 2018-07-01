<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Area</title>

    </head>
    <body>
    	<h1>Area</h1>
    	
    	<form action="/cadastrar/area" method="get"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input  type="submit" value="cadastrar" />
    	</form>
    	<form action="/atualizar/area" method="get"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input  type="submit" value="atualizar" />
    	</form>
    	<form action="/remover/area" method="get"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input  type="submit" value="remover" />
    	</form>
    	<form action="/listar/areas" method="get"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input  type="submit" value="listar" />
    	</form>
 
 
 
 
    </body>
</html>