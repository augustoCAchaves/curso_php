<?php

class Cachoro
{
    public $raca;
    public $cor;
    public $nome;
    public $idade;

    function __construct($raca, $cor, $nome, $idade)
    {
        $this->raca = $raca;
        $this->cor = $cor;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function exibirInformacoes()
    {
        echo "Dados de $this->nome: <br>";
        echo "Raça: $this->raca <br>";
        echo "Cor: $this->cor <br>";
        echo "Nome: $this->nome <br>";
        echo "Idade: $this->idade anos<br>";
        echo "<br>";
    }
}

$rex = new Cachoro("Pastor Alemão", "Preto", "Rex", 2);

$rex->exibirInformacoes();

$raca = "Pitbull";
$cor = "Cinza";
$nome = "Thor";
$idade = 5;

$thor = new Cachoro($raca, $cor, $nome, $idade);

$thor->exibirInformacoes();
