<?php

function verifica($num)
{
    if ($num % 2 == 0) {
        echo "O número $num é par <br>";
    } else {
        echo "O número $num é ímpar <br>";
    }
}

verifica(21);
verifica(2);
verifica(11);
verifica(444);
