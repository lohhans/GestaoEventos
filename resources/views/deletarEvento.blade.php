<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Deletar Evento</title>

</head>
<body>
<h1>Deletar Evento</h1>

<form action="/deletar/evento" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    Descricao: <input type="text" name="descricao" ><br/>
    <input  type="submit" value="deletar" />
</form>


</body>
</html>