<?php

function sumDigits($num)
{
    // Converte o número em string para poder iterar sobre cada dígito
    $numStr = (string)$num;
    $sum = 0;

    for ($i = 0; $i < strlen($numStr); $i++) {
        $sum += (int)$numStr[$i];
    }

    return $sum;
}

$num = 2165;
$sum = sumDigits($num);

echo "Soma dos dígitos de $num: $sum <br>";
