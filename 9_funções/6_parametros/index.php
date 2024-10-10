<?php

function velocidadeMaxima($vel)
{
    if (is_int($vel)) {
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    } else {
        echo "Por favor passe um número inteiro <br>";
    }
}

function descreverAnimal($nome, $raca)
{
    echo "o $nome é da raça $raca <br>";
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

$velocidade = 125;

velocidadeMaxima($velocidade);
velocidadeMaxima("teste");

// PHP ignora parâmetro desnecessário
velocidadeMaxima(280, "teste");

descreverAnimal("Chico", "pinscher");
descreverAnimal("Bob", "Pastor Alemão");
