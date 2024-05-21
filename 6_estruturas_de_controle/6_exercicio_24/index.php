<?php

$nome = "Augusto";
$idade = 20;
$altura = 1.75;
$estudante = true;

$msgTrue = "A variável é um inteiro <br>";
$msgFalse = "A variável não é um inteiro <br>";

if (is_int($nome)) {
    echo "Variável nome - ";
    echo $msgTrue;
} else {
    echo "Variável nome - ";
    echo $msgFalse;
}

if (is_int($idade)) {
    echo "Variável idade - ";
    echo $msgTrue;
} else {
    echo "Variável idade - ";
    echo $msgFalse;
}

if (is_int($altura)) {
    echo "Variável altura - ";
    echo $msgTrue;
} else {
    echo "Variável altura - ";
    echo $msgFalse;
}

if (is_int($estudante)) {
    echo "Variável estudante - ";
    echo $msgTrue;
} else {
    echo "Variável estudante - ";
    echo $msgFalse;
}
