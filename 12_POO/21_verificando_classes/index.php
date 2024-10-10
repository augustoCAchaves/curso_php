<?php

// class_exists() => verifica se uma classe existe
// get_class_methods() => verifica os métodos de uma classe
// get_class_vars() => mapeamento das propriedades de uma classe 


class Humano
{
    public $nome;
    public $idade;
    public $sexo;
    public $profissao;

    public function falar() {}
    public function correr() {}
    public function estudar() {}
}

if (class_exists("Humano")) {
    echo "A classe existe <br>";
}

// class_exists()
if (class_exists("Animal")) {
    echo "A classe existe <br>";
} else {
    echo "A classe não existe <br>";
}

// get_class_vars()
print_r(get_class_vars("Humano"));

echo "<br>";

// get_class_methods()
print_r(get_class_methods("Humano"));
