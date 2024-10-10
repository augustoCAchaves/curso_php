<?php

// Classes abstratas não podem ser instanciadas

abstract class Teste
{
    public static function testandoClasse()
    {
        echo "Esse método é de uma classe abstrata <br>";
    }

    // Podemos ter métodos abstratos, que devem ser implementados obrigatoriamente se uma classe herdar a abstrata;
    abstract public function testeAbs();
}

// $t = new Teste;

Teste::testandoClasse();

class Nova extends Teste
{

    public function testeAbs()
    {
        echo "Testando método abstrato <br>";
    }
}

$n = new Nova;
$n->testeAbs();
