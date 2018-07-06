<!doctype html>
<html>
<head>
    <title>Listar Vouchers</title>
</head>
<body>
<ul>
    <?php
    foreach($vouchers as $voucher){
    ?>
    <h1><?php echo "ID do Voucher: ".$voucher->id." - descricao: ".$voucher->descricao." - limite: ".$voucher->limite." - percentual: ".$voucher->percentual?></h1>
    <?php
    }
    ?>
</ul>
</body>
</html>