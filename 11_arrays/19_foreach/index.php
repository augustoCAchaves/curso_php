<?php

$augusto = [
    'nome' => 'Augusto',
    'idade' => 20,
    'profissao' => 'Programador'
];

$alexa = [
    'nome' => 'Alexa',
    'idade' => 25,
    'profissao' => 'Eng. Civil'
];

echo $augusto['nome'] . ":<br>";
foreach ($augusto as $key => $value) {
    echo "$key => $value <br>";
}

echo "<br>";

echo $alexa['nome'] . ":<br>";
foreach ($alexa as $key => $value) {
    echo "$key => $value <br>";
}
