<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Adicionar Voucher</title>

</head>
<body>
<h1>Deletar Voucher</h1>

<form action="/deletar/voucher" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    Descricao: <input type="text" name="descricao" ><br/>
    <input  type="submit" value="deletar" />
</form>


</body>
</html>