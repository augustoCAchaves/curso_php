<?php

echo 5 / 2;
echo "<br>";

if (is_float(5 / 2)) {
    echo "É um valor float <br>";
}

echo 2 . 3; // Operador de concatenação
echo "<br>";

if (is_string(2 . 3)) {
    echo "É uma string <br>";
}

$nome = "Augusto";
$sobrenome = "César";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
