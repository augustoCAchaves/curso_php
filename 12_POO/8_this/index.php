<?php

class Animal
{

    public $nome;

    function escolherNome($nome)
    {
        $this->nome = $nome;
    }

    function latir()
    {
        return "au au <br>";
    }

    function latirForte()
    {
        return strtoupper($this->latir());
    }
}

$chico = new Animal;

if (!isset($chico->nome)) {
    echo "O animal ainda não possui nome <br>";
}

// if (empty($chico->nome)) {
//     echo "O animal ainda não possui nome <br>";
// }

$chico->escolherNome("Chico");

echo "O nome do animal é: $chico->nome <br>";

echo $chico->latir();
echo $chico->latirForte();
