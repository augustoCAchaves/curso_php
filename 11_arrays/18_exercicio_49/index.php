<?php

$nome = "Augusto";
$idade = 20;
$tatuagem = true;
$profissao = "Programador";
$peso = 74.2;

$pessoa = compact("nome", "idade", "tatuagem", "profissao", "peso");

foreach ($pessoa as $key => $value) {
    echo $key . ": ";

    if ($key === "tatuagem") {
        if ($value) {
            echo "possui" . "<br>";
        } else {
            echo "não possui" . "<br>";
        }
    } else {
        echo $value . "<br>";
    }
}


// foreach ($pessoa as $key => $value) {
//     echo $key . ": ";

//     if ($key === "tatuagem") {
//         echo $value ? "possui" . "<br>" : "não possui" . "<br>";
//     } else {
//         echo $value . "<br>";
//     }
// }
