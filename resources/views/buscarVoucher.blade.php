<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Buscar Voucher</title>

</head>
<body>
<h1>Buscar Voucher</h1>

<form action="/buscar/voucher" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        Descricao: <input type="text" name="descricao" ><br/>
    <input  type="submit" value="buscar" />
</form>


</body>
</html>