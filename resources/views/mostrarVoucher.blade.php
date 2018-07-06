<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Voucher</title>

</head>
<body>
<h1>Usuario</h1>
<?php
foreach($vouchers as $voucher){
?>
<form action="/atualizar/voucher" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id" value="<?= $voucher->id;?>">
    Descricao: <input type="text" name="descricao" value="<?= $voucher->descricao;?>"><br/>
    Limite: <input type="text" name="limite" value="<?= $voucher->limite;?>"><br/>
    Percentual: <input type="text" name="percentual" value="<?= $voucher->percentual;?>"><br/>

    <input  type="submit" value="atualizar" />
</form>
<?php
}
?>


</body>
</html>