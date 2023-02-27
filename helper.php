<?php

require "app/classes/Password.php";

$qtdCar = intval($_POST['input']);
$arr = [8, 12, 16];

if(is_numeric($qtdCar) && is_int($qtdCar) && in_array($qtdCar, $arr)) {

    $s = new Password($qtdCar);

}else {
    header('Location: erro.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha Gerada</title>

    <link rel="stylesheet" href="/src/css/style.css">
</head>
<body>
    <div class="box-senha">
        <p>Senha Gerada: <span id="senha-gerada"><?php echo $s->getPassowrd() ?></span></p>
        <button id="btn-copiar" onclick="copyPass()">Copiar</button>
    </div>

    <script src="/src/js/helper.js"></script>
</body>
</html>