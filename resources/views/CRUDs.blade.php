<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>CRUDS</title>

    </head>
    <body>
    	<h1>CRUDS</h1>
    	
    	<form action="/usuario" method="get"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />    			
    			<input  type="submit" value="Usuario" />
    	</form>
    	<form action="/tela/area" method="get"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />    			
    			<input  type="submit" value="Area" />
    	</form>
    	
    	
	
    </body>
</html>