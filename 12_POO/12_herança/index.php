<?php

class Humano
{

    private $nome = "Augusto";
    public $idade = 20;

    public function falar()
    {
        echo "Olá mundo! <br>";
    }

    public function getNome()
    {
        return $this->nome;
    }

    private function gritar()
    {
        echo "PHP É MUITO BOM!!! <br>";
    }

    public function getGritar()
    {
        return $this->gritar();
    }

    protected function sussurar()
    {
        echo "shhhhhh... <br>";
    }

    public function getSussurrar()
    {
        return $this->sussurar();
    }
}

class Programador extends Humano
{

    public function getSussurrarProgramador()
    {
        return $this->sussurar();
    }
}

$manuela = new Humano;

$manuela->falar();
echo $manuela->getNome() . "<br>";
$manuela->getSussurrar();

$augusto = new Programador;

echo $augusto->idade . "<br>";
$augusto->falar();
$augusto->getGritar();
$augusto->getSussurrar();
$augusto->getSussurrarProgramador();
