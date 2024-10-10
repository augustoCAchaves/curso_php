<?php

$frase1 = "testando o case de uma palavra <br>";
$frase2 = "Testando o case de uma palavra <br>";

// Primeira letra da string em maiúsculo
echo ucfirst($frase1);
echo ucfirst($frase2);

// Todas as palavras com as inicias maiúsculas
echo ucwords($frase1);
echo ucwords($frase2);
