<?php

$pessoa = [
    'nome' => 'Augusto',
    'idade' => 20,
    'altura' => 1.81,
    'cor' => 'branco',
    'estudande' => true
];

print_r($pessoa);

echo "<br>";
$nome = $pessoa['nome'];
$idade = $pessoa['idade'];

echo "$nome possui $idade anos. <br>";

if ($idade >= 18) {
    echo "$nome é maior de idade!";
} else {
    echo "$nome não é maior de idade!";
}
