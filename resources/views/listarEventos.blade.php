<!doctype html>
<html>
<head>
    <title>Listar Vouchers</title>
</head>
<body>
<ul>
    <?php
    foreach($eventos as $evento){
    ?>
    <h1><?php echo "ID do evento: ".$evento->id." - localizacao do evento: ".$evento->localizacao." - descricao: ".
    $evento->descricao." - data inicial: ".$evento->dataInicio." - data final: ".$evento->dataFim." - data de pagamento: ".
    $evento->dataPagamento." - ID da area: ".$evento->Area->descricao?></h1>
    <?php
    }
    ?>
</ul>
</body>
</html>