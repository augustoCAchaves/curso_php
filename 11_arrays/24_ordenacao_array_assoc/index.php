<?php

$arr = [
    "Aegon" => 85,
    "Jhora" => 62,
    "Jhon" => 24,
    "Daenerys" => 23
];

echo "Array antes da ordenação: <br>";
print_r($arr);
echo "<br><br>";

asort($arr);

echo "Array depois da ordenação ordem crescente: (VALUES) <br>";
print_r($arr);
echo "<br><br>";

$arr2 = [
    "Arya" => 10,
    "Brandon" => 12,
    "Jhon" => 24,
    "Eddard" => 43
];

echo "Array antes da ordenação: <br>";
print_r($arr2);
echo "<br><br>";

arsort($arr2);

echo "Array depois da ordenação ordem decrescente: (VALUES) <br>";
print_r($arr2);
echo "<br><br>";

ksort($arr2);

echo "Array depois da ordenação ordem crescente: (KEYS) <br>";
print_r($arr2);
echo "<br><br>";

krsort($arr2);

echo "Array depois da ordenação ordem decrescente: (KEYS) <br>";
print_r($arr2);
echo "<br><br>";
