<?php

$frase = "Testando o explode";

$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo "<br>";

$fraseArray2 = explode(",", $frase);

print_r($fraseArray2);
echo "<br>";

$fraseB = "Avião, Navio, Motocicleta, Barco";

$fraseArrayB = explode(",", $fraseB);

print_r($fraseArrayB);
echo "<br>";

for ($i = 0; $i < count($fraseArrayB); $i++) {

    echo $fraseArrayB[$i] . "<br>";
}
