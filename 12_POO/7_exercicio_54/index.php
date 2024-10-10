<?php

class Pessoa
{

    public $nome = "Manuela";
    public $idade;

    function andar($m)
    {
        echo "Essa pessoa andou $m metros <br>";
    }
}

$manu = new Pessoa;

echo "Dados da pessoa 1: <br>";

echo "Nome: " . $manu->nome . "<br>";

$manu->idade = 21;
echo "Idade: " . $manu->idade . "<br>";

$manu->andar(237);

$luisa = new Pessoa;

$luisa->nome = "Luisa";
$luisa->idade = 17;

echo "<br> Dados da pessoa 2: <br>";

echo "Nome: " . $luisa->nome . "<br>";
echo "Idade: " . $luisa->idade . "<br>";
$luisa->andar(20);
