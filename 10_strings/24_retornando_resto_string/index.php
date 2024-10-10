<?php

$frase = "Testando o resto da string, pra ver se dá certo";

$rest = strstr($frase, "resto");

echo "$rest <br>";

$p = ",";

$rest2 = strstr($frase, $p);

echo "$rest2 <br>";

if (strstr($frase, ".NET") === false) {

    echo "String não encontrada ! <br>";
}

$rest3 = substr($frase, strpos($frase, "ver"));

echo "$rest3 <br>";
