<?php

class Pessoa
{
  public $nome;

  function falar()
  {
    echo "Olá pessoal!";
  }
}

$augusto = new Pessoa();

$augusto->nome = "Augusto";

echo $augusto->nome;

echo "<br>";

$augusto->falar();
