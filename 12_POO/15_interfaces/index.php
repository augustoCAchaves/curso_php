<?php

interface Caracteristicas
{
    // Interfaces em PHP não podem ter propriedades
    // public $nome = "Augusto";

    const NOME = "Augusto";

    // Todos os métodos da interface devem também ser implementados na classe
    public function falar();
}

class Humano implements Caracteristicas
{
    public  $idade = 29;

    public function falar()
    {
        echo "Olá mundo ! <br>";
    }

    public function dizerNome()
    {
        echo "Meu nome é " . self::NOME . "<br>";
    }
}

$augusto = new Humano;

$augusto->falar();
$augusto->dizerNome();
