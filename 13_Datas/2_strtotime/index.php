<?php

// Dias

$cincoDias = strtotime("5 days");

echo $cincoDias . "<br>";

$dezDias = strtotime("10 days");

echo $dezDias . "<br>";

// Somando dias

$diaAtualMais5 = date('d/m/y', $cincoDias);

echo $diaAtualMais5 . "<br>";

$diaAtualMais10 = date('d/m/y', $dezDias);

echo $diaAtualMais10 . "<br>";

// Meses

$doisMeses = strtotime("2 months");

echo $doisMeses . "<br>";

// Somando meses

$diaAtualMais2 = date('d/M/y', $doisMeses);

echo $diaAtualMais2 . "<br>";

// Anos

$dezesseisAnos = strtotime("16 years");

echo $dezesseisAnos . "<br>";

// Somando anos

$diaAtualMais16 = date('D/M/y', $dezesseisAnos);

echo $diaAtualMais16 . "<br>";
