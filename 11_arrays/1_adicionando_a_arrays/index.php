<?php

// Adicionando valores 
$arr = [];
print_r($arr);
echo "<br>";

$arr[0] = 20;
print_r($arr);
echo "<br>";

$arr[1] = 15;
print_r($arr);
echo "<br>";

$arr[12] = 68;
print_r($arr);
echo "<br>";

// Alterando valores 
$arr[1] += 55;
print_r($arr);
echo "<br>";

$arr[0] -= 15;
print_r($arr);
echo "<br>";

// Arrays Associativos
$arrAssoc = [];
print_r($arrAssoc);
echo "<br>";

$arrAssoc["carro"] = "BMW";
print_r($arrAssoc);
echo "<br>";

$arrAssoc["avião"] = "Boeing";
print_r($arrAssoc);
echo "<br>";

$arrAssoc["carro"] = "Ferrari";
print_r($arrAssoc);
echo "<br>";
