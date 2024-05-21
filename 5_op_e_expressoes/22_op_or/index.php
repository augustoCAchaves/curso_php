<?php

if (5 > 2 || 3 > 4) {  // true e true 
    echo "A operação 1 é verdadeira <br>";
}


if (5 > 2 || 30 > 4) {  // true e false 
    echo "A operação 2 é verdadeira <br>";
}

if (5 > 200 || 30 > 4) {  // false e true 
    echo "A operação 3 é verdadeira <br>";
}

if (5 > 200 || 30 > 450) {  // false e false 
    echo "A operação 4 é verdadeira <br>";
}


$a = 10;
$b = 40;

if ($a > $b || "teste" === "teste") {
    echo "A operação 5 é verdadeira <br>";
}

if (($a > $b || "teste" === "teste") && $b < $a) {
    echo "A operação 6 é verdadeira <br>";
}
