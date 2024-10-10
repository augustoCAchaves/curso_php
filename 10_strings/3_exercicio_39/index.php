<?php

$arr = [
    "porta" => 150,
    "janela" => 100,
    "prato" => 9.76,
    "sofa" => 500,
    "talher" => 5
];

function expItems($arr)
{

    $itensCaros = [];

    foreach ($arr as $item => $preco) {
        if ($preco > 10) {
            array_push($itensCaros, $item);
        }
    }

    return $itensCaros;
}

$novoArr = expItems($arr);

print_r($novoArr);
