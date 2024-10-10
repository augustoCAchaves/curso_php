<?php

function maiorElemento($arr)
{
    $maior = max($arr);

    return $maior;
}

$arr = [12, 27, 2, 0, 231, 4, 9, 121, 2024, 10000];

print_r($arr);
echo "<br>";

$maior = maiorElemento($arr);

echo "Maior elemento: <br>";
echo "$maior <br>";
