<?php

function compararNumeros($n1, $n2)
{
    if ($n1 > $n2) {
        return "$n1 é maior que $n2";
    } else if ($n2 > $n1) {
        return "$n2 é maior que $n1";
    } else {
        return "$n2 e $n1 são iguais";
    }
}

echo compararNumeros(8, 12) . "<br>";
echo compararNumeros(80, 12) . "<br>";
echo compararNumeros(122, 122) . "<br>";
