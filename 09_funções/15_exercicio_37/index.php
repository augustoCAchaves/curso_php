<?php

function defineCorCarro($cor = "vermelha")
{
    return "A cor do carro é $cor";
}

echo defineCorCarro();
echo "<br>";

echo defineCorCarro("branco perolado");
echo "<br>";

$carroAzul = defineCorCarro("azul");
echo $carroAzul . "<br>";
