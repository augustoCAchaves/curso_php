<?php

$frase = "Testando encontrando palavra teste, em uma string que tem teste";

// Última posição
$ultima = strrpos($frase, "teste");

echo "$ultima <br>";

// Primeira posição
$primeira = strpos($frase, "teste");

echo "$primeira <br>";

if (strrpos($frase, "Java") === false) {
    echo "Palavra não encontrada <br>";
}

$findWord = substr($frase, strpos($frase, "string"), 6);

echo $findWord . "<br>";
