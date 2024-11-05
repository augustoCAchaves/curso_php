<?php

function maioresSete($arr)
{
    $newArr = [];

    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] > 7) {
            array_push($newArr, $arr[$i]);
        }
    }

    return $newArr;
}

// Criando um array com números de 0 a 30
$arr = [];

for ($i = 0; $i <= 30; $i++) {
    array_push($arr, $i);
}

echo "Array original: <br>";

for ($i = 0; $i < count($arr); $i++) {
    echo "$arr[$i] ";
}
echo "<br>";

$newArr = maioresSete($arr);

echo "Novo array com números maiores que 7: <br>";

for ($i = 0; $i < count($newArr); $i++) {
    echo "$newArr[$i] ";
}
echo "<br>";
