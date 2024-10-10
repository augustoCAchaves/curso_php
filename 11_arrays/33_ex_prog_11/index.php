<?php

function encontrarPares($arr)
{
    $arrPares = [];

    foreach ($arr as $item) {

        if ($item % 2 === 0) {
            array_push($arrPares, $item);
        }
    }

    return $arrPares;
}

$arr = range(1, 30);

print_r($arr);
echo "<br><br>";

$arrPares = encontrarPares($arr);

print_r($arrPares);
