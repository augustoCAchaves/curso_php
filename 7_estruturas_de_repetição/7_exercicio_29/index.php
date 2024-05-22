<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$count = count($arr);
$i = 0;

while ($i < $count) {

    $numeroAtual = $arr[$i];

    if ($numeroAtual == 30 || $numeroAtual == 40) {
        $i++;

        continue;
    }

    echo "Executando o loop $numeroAtual <br>";

    $i++;
}
