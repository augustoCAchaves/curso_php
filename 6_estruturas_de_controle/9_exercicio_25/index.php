<?php

$a = 700;
$s = "teste";

if (is_int($a) || is_float($a)) {
    echo "$a é um número <br>";

    $aux = $a * 2;

    if ($aux > 100) {
        echo "$aux é maior que 100 <br>";
    } else {
        echo "$aux não é maior que 100 <br>";
    }
} else {
    echo "$a não é um número <br>";
}

if (is_int($s) || is_float($s)) {
    echo "$s é um número <br>";

    $aux = $s * 2;

    if ($aux > 100) {
        echo "$aux é maior que 100 <br>";
    } else {
        echo "$aux não é maior que 100 <br>";
    }
} else {
    echo "$s não é um número <br>";
}
