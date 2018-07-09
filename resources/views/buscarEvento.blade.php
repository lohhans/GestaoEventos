<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Buscar Evento</title>

</head>
<body>
<h1>Buscar Evento</h1>

<form action="/buscar/evento" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        Descricao: <input type="text" name="descricao" ><br/>
    <input  type="submit" value="buscar" />
</form>


</body>
</html>