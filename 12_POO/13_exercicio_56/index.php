<?php

class Humano
{
    private const OLHOS = 2;
    protected const BRACOS = 2;
    protected const PERNAS = 2;

    private function falar()
    {
        echo "Olá mundo!";
    }

    public function getOlhos()
    {
        return self::OLHOS;
    }

    public function getBracos()
    {
        return self::BRACOS;
    }

    public function getFalar()
    {
        return $this->falar();
    }

    protected function ensinar()
    {
        echo "Estou ensinando!";
    }

    public function getEnsinar()
    {
        return $this->ensinar();
    }
}

class Professor extends Humano
{
    private $nome = "Adailton";
    private $idade = 33;

    public function getEnsinarProfessor()
    {
        return $this->ensinar();
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPernas()
    {
        return self::PERNAS;
    }

    public function getBracosProfessor()
    {
        return $this->getBracos();
    }
}

$manuela = new Humano;

echo "DADOS DE MANUELA: <br>";
echo $manuela->getOlhos() . " OLHOS <br>";
echo $manuela->getFalar() . "<br>";
echo $manuela->getEnsinar() . "<br>";

$docente = new Professor;

echo "<br>DADOS DO DOCENTE: <br>";
echo "NOME: " . $docente->getNome() . "<br>";
echo $docente->getPernas() . " PERNAS <br>";
echo $docente->getBracosProfessor() . " BRACOS <br>";
