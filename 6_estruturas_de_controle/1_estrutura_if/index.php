<?php

if (5 > 2) {
    echo "Comparação verdadeira 1 <br>";
}

if (5 <= 2) {
    echo "Comparação falsa <br>";
}

if ("10" === "10" && 9 > 3) {
    echo "Comparação verdadeira 2 <br>";
}

// Variáveis

$a = 10;
$b = 5;
$c = "Comparação verdadeira 3 <br>";

if ($a >= $b) {
    echo $c;
}
