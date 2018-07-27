<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Remover Area</title>

    </head>
    <body>
    	<h1>Remover Area</h1>
    	
    	<form action="/remover/area" method="post"> 
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			Descrição: <input type="text" name="descricao" ><br/>
    			<input  type="submit" value="remover" />
    	</form>
 
    </body>
</html>