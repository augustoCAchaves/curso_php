<?php

$array = [
    'nome' => 'Augusto',
    'idade' => 20
];

if (array_key_exists("nome", $array)) {
    echo "A chave existe <br>";
} else {
    echo "A chave não existe <br>";
}

if (array_key_exists("profissao", $array)) {
    echo "A chave existe <br>";
} else {
    echo "A chave não existe <br>";
}

if (isset($array['nome'])) {
    echo "A chave existe ISSET<br>";
} else {
    echo "A chave não existe ISSET<br>";
}

if (isset($array['teste'])) {
    echo "A chave existe ISSET<br>";
} else {
    echo "A chave não existe ISSET<br>";
}

// $x = 10;

if (isset($x)) {
    echo "A variável existe ISSET<br>";
} else {
    echo "A variável não existe ISSET<br>";
}
