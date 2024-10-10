<?php

$str = "Esta é a minha string";

$minha = substr($str, 10, 5); // STRING PAI, INDICE ATUAL, COMPRIMENTO DA PALAVRA

echo $str . "<br>";
echo $minha . "<br>";

$str2 = "Testando esta string abc";

$novaString = substr($str2, 9); // OMITIR COMPRIMENTO = PEGAR ATE O FIM

echo $novaString . "<br>";

$novaString2 = substr($str2, 9, -3); // COMPRIMENTO NEGATIVO = REMOVER DO ULTIMO INDICE

echo $novaString2 . "<br>";
