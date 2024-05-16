<?php

$teste = "asd";
echo "$teste global 1 <br>";

// Compartilha o escopo global do código (não é uma função)
if (true) {

    $teste = "dsa";
    echo "$teste if  <br>";
}

echo "$teste global 2 <br>";

// Escopo Local
function funcao()
{

    $teste = "xsxs";
    echo "$teste local <br>";
}

funcao();

// Acessando variável global no escopo local
function testandoGlobal()
{

    global $teste;
    $teste = 2;

    echo "$teste global função <br>";
}

testandoGlobal();

echo "$teste global 3 <br>";
