<?php

$dataNascimento = mktime(22, 45, 28, 02, 29, 2024);

echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

echo $dataNascimentoFormatada . "<br>";

$dataFutura = mktime(16, 48, 12, 07, 02, 2028);

$dataFuturaFormatada = date('d/m/Y', $dataFutura);

echo $dataFuturaFormatada . "<br>";
