<?php

class Pessoa
{

    public $nome = "Augusto";
    public $idade;
    public $altura = 1.78;
    public $cabelo = "Marrom";

    function falar()
    {
        echo "Olá, sou uma pessoa!";
    }
}

$augusto = new Pessoa;

$augusto->idade = 20;

echo $augusto->idade . "<br>";
echo $augusto->altura . "<br>";

$augusto->cabelo = "Preto";

echo $augusto->cabelo . "<br>";

$augusto->falar() . "<br>";
