<?php

// DIFERENÇA ENTRE DATAS

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2004, 02, 29);

print_r($dataA);
echo "<br>";

print_r($dataB);
echo "<br>";

// Data A - Data B
$diferenca = $dataA->diff($dataB);

print_r($diferenca);
echo "<br>";

// Exibindo a diferença em anos
echo $diferenca->format("%y anos") . "<br>";

// Exibindo a diferença em meses
echo $diferenca->format("%m meses") . "<br>";

// Exibindo a diferença em dias
echo $diferenca->format("%a dias") . "<br>";
