<?php

$arr = [
    [1, 2, 3],
    [4, 5, 6, 7]
];

print_r($arr);
echo "<br>";

echo $arr[0][1] . "<br>";   // Acessando o primeiro array e segundo elemento
echo $arr[1][2] . "<br>";   // Acessando o segundo array e último elemento

echo count($arr) . "<br>";
echo count($arr[1]) . "<br>";   // Conta o número de elementos do segundo array
