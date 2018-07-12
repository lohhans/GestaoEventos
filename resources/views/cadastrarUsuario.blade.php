<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>cadastrar Usuario</title>

    </head>
    <body>
    	<h1>cadastrar Usuario</h1>

    	<form action="/cadastrar/usuario" method="post">
    		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    			Nome: <input type="text" name="nome" ><br/>
    			email: <input type="text" name="email" ><br/>
    			cpf: <input type="text" name="cpf" ><br/>
    			login: <input type="text" name="login" ><br/>
    			senha <input type="text" name="senha" ><br/>
	    		tipo usuario: <input type="text" name="tipousuario_id" ><br/>

    			<input  type="submit" value="cadastrar" />
    	</form>


    </body>
</html>
