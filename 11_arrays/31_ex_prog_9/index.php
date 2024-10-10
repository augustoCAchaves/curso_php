<?php

function somaElementos($arr)
{
    return array_sum($arr);
}

$arr = [1, 20, 30, 40, 15];

echo "Array: <br>";

print_r($arr);
echo "<br><br>";

echo "Soma de seus elementos: <br>";
echo somaElementos($arr) . "<br>";
