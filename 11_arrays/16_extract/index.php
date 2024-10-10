<?php

$arr = [
    'cor' => 'vermelho',
    'formato' => 'retangular',
    'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$formato <br>";
echo "$material <br>";

$nome = "Augusto";

$pessoa = [
    'nome' => 'Matheus',
    'idade' => 29
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";
