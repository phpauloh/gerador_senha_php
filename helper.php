<?php

require "app/classes/Password.php";

$qtdCar = intval($_POST['input']);
$arr = [8, 12, 16];

if(is_numeric($qtdCar) && is_int($qtdCar) && in_array($qtdCar, $arr)) {

    $s = new Password($qtdCar);

    echo "A senha gerada foi: " . $s->getPassowrd();

}else {
    header('Location: erro.php');
    exit;
}