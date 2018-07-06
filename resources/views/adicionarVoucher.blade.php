<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Adicionar Voucher</title>

</head>
<body>
<h1>Adicionar Voucher</h1>

<form action="/adicionar/voucher" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    Descricao: <input type="text" name="descricao" ><br/>
    Limite: <input type="text" name="limite" ><br/>
    Percentual: <input type="text" name="percentual" ><br/>

    <input  type="submit" value="cadastrar" />
</form>


</body>
</html>