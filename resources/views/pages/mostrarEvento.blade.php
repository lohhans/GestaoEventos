<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Evento</title>

</head>
<body>
<h1>Evento</h1>
<?php
foreach($eventos as $evento){
?>
<form action="/atualizar/evento" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id" value="<?= $evento->id;?>">
	 Localizacao: <input type="text" name="localizacao" value="<?= $evento->localizacao;?>"><br/>
    Descricao: <input type="text" name="descricao" value="<?= $evento->descricao;?>"><br/>
    Data inicial: <input type="text" name="dataInicio" value="<?= $evento->dataInicio;?>"><br/>
    Data final: <input type="text" name="dataFim" value="<?= $evento->dataFim;?>"><br/>
    Data de pagamento: <input type="text" name="dataPagamento" value="<?= $evento->dataPagamento;?>"><br/>
    ID da area: <input type="text" name="area_id" value="<?= $evento->area_id;?>"><br/>
    <input  type="submit" value="atualizar" />
</form>
<?php
}
?>


</body>
</html>