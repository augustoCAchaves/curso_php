<?php

function ordenarNumeros($arr)
{
    sort($arr);

    return $arr;
}

$arr = [12, 0.87, 212, 89.98, 89.66, 1312];

print_r($arr);
echo "<br><br>";

$arrOrdenado = ordenarNumeros($arr);

print_r($arrOrdenado);
