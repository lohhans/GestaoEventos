<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Evento</title>

</head>
<body>
<h1>Evento</h1>

<form action="/adicionar/evento" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input  type="submit" value="Cadastrar" />
</form>
<form action="/buscar/evento" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input  type="submit" value="atualizar" />
</form>
<form action="/deletar/evento" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input  type="submit" value="deletar" />
</form>
<form action="/listar/eventos" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input  type="submit" value="listar" />
</form>


</body>
</html>