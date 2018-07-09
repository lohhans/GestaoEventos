<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Adicionar Evento</title>

</head>
<body>
<h1>Adicionar Evento</h1>

<form action="/adicionar/evento" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    Localizacao: <input type="text" name="localizacao" ><br/>
    Descricao: <input type="text" name="descricao" ><br/>
    Data inicial: <input type="datetime" name="dataInicio" ><br/>
    Data final: <input type="datetime" name="dataFim" ><br/>
    Data de pagamento: <input type="datetime" name="dataPagamento" ><br/>
    Codigo da area: <input type="text" name="area_id" ><br/>

    <input  type="submit" value="cadastrar" />
</form>


</body>
</html>