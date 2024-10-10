<?php

function countVowels($str)
{
    $strMinusc = strtolower($str);
    $aux = 0;

    for ($i = 0; $i < strlen($strMinusc); $i++) {
        if ($strMinusc[$i] == "a" || $strMinusc[$i] == "e" || $strMinusc[$i] == "i" || $strMinusc[$i] == "o" || $strMinusc[$i] == "u") {
            $aux++;
        }
    }

    return $aux;
}

$str = "Augusto";
$qtyVows = countVowels($str);
echo "A string: $str possui $qtyVows vogais <br>";
