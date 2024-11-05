<?php

$idade1 = 16;
$idade2 = 22;
$idade3 = 67;

$maioridade = 18;
$msg = "Pessoa maior de idade <br>";

if ($idade1 >= $maioridade) {
    echo "1 - ";
    echo $msg;
}

if ($idade2 >= $maioridade) {
    echo "2 - ";
    echo $msg;
}

if ($idade3 >= $maioridade) {
    echo "3 - ";
    echo $msg;
}
