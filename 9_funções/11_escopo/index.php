<?php

$a = 10;
$b = 15;

function testeEscopo()
{
    $a = 5;
    $a++;

    global $b;
    $b++;

    static $c = 0;
    $c++;

    echo "ESCOPO LOCAL DE a: $a <br>";
    echo "ESCOPO GLOBAL NA FUNÇÃO DE b: $b <br>";
    echo "ESCOPO STATIC DE c: $c <br>";
}

echo "ESCOPO GLOBAL DE a: $a <br>";
echo "ESCOPO GLOBAL DE b: $b <br>";

testeEscopo();

echo "ESCOPO GLOBAL DE b 2: $b <br>";

testeEscopo();
