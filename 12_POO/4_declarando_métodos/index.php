<?php

class Pessoa
{

    function falar()
    {
        echo "Olá, eu sou um objeto! <br>";
    }

    function soma($x, $y)
    {
        echo $x + $y . "<br>";
    }
}

$augusto = new Pessoa;

$augusto->falar();

$joao = new Pessoa;

$joao->falar();

$augusto->soma(2, 2);

$joao->soma(10, 12);
