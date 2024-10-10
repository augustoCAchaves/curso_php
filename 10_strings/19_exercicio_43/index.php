<?php

$str = "carro - navio - helicóptero - barco - jangada";

$strArray = explode("-", $str);

print_r($strArray);
echo "<br><br>";

$aux = 1;

for ($i = 0; $i < count($strArray); $i++) {

    echo "Item $aux: " . $strArray[$i] . "<br>";

    $aux++;
}
