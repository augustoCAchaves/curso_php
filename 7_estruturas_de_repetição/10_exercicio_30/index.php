<?php

$aux = 1;
$arr = [];

echo "Array de 1 a 20: <br>";   // Utilizando a variável aux
for ($i = 0; $i < 20; $i++) {
    $arr[$i] = $aux;
    echo "arr[$i] = $arr[$i] <br>";
    $aux++;
}

$count = count($arr);

echo "<br> Números pares do array de 1 a 20: <br>";
for ($i = 0; $i < $count; $i++) {
    if ($arr[$i] % 2 == 0) {
        echo "$arr[$i] <br>";
    }
}
