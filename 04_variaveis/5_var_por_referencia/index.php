<?php

$x = 22;
echo "x: $x <br>";

$y = &$x;
echo "y: $y <br>";

$x = 20.789;
echo "Após a modificação da variável de referência (x): <br>";
echo "x: $x <br>";
echo "y: $y <br>";

$y = 15;
echo "Após a modificação da variável referenciada(y): <br>";
echo "x: $x <br>";
echo "y: $y <br>";

$nome = "Augusto";
$nome2 = &$nome;
echo "Variável nome: $nome <br>";
echo "Variável nome2: $nome2 <br>";

$nome2 = "João";
echo "Variável nome: $nome <br>";
echo "Variável nome2: $nome2 <br>";
