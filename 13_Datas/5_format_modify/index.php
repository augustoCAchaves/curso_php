<?php

// Definindo o fuso horário
date_default_timezone_set('America/Sao_Paulo');

$data = new DateTime();

// data atual
echo $data->format('d/m/y') . "<br>";

echo $data->format('D - M - Y') . "<br>";

echo $data->format('l. F . Y') . "<br>";

// atual + 10 dias
$data->modify('+10 days');

echo $data->format('d/m/y') . "<br>";

// atual + 20 anos
$data->modify('+20years');

echo $data->format('d/m/y') . "<br>";

// atual - 4 meses
$data->modify('-4 months');

echo $data->format('d/m/y') . "<br>";
