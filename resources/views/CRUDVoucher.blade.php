<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Voucher</title>

</head>
<body>
<h1>Voucher</h1>

<form action="/adicionar/voucher" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input  type="submit" value="Cadastrar" />
</form>
<form action="/buscar/voucher" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input  type="submit" value="atualizar" />
</form>
<form action="/deletar/voucher" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input  type="submit" value="deletar" />
</form>
<form action="/listar/vouchers" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input  type="submit" value="listar" />
</form>


</body>
</html>