<?php

// is_object() => verifica se uma variável é um objeto
// get_class() => verifica a classe de um objeto
// method_exists() => verifica se um método existe em um objeto

class Humano
{
    public function falar() {}
    public function andar() {}
}

$augusto = new Humano;

$teste = 20;

if (is_object($augusto)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

if (is_object($teste)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

echo get_class($augusto) . "<br>";

if (method_exists($augusto, "falar")) {
    echo "O método existe <br>";
} else {
    echo "O método não existe <br>";
}

if (method_exists($augusto, "asd")) {
    echo "O método existe <br>";
} else {
    echo "O método não existe <br>";
}
