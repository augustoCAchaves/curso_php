<?php

$arr = [1, 2, 4, 100, 250, 50];

function soma($a, $b)
{
    return $a + $b;
}

function subtr($a, $b)
{
    return $a - $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";

$resultado2 = array_reduce($arr, "subtr");

echo "$resultado2 <br>";
