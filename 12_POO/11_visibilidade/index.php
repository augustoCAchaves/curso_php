<?php

/* protected - A propriedade ou método pode ser acessada apenas pela classe de origem ou as que recebem a mesma de herança; */

class Car
{

    // public - A propriedade ou método pode ser acessada de qualquer forma;
    public $rodas = 2;

    // private - A propriedade ou método pode ser acessada apenas pela classe que foi criada; */
    private $vidro = "Sem película";

    public function getVidro()
    {
        return $this->vidro;
    }

    public function setVidro($pelicula)
    {
        $this->vidro = $pelicula;
    }
}

class Mecanico
{

    public function alterarRodas($carro)
    {
        $carro->rodas = 4;
    }

    public function colocarPelicula($carro, $pelicula)
    {
        $carro->vidro = $pelicula;
    }
}

$civic = new Car;

echo $civic->rodas . "<br>";

// Não podemos acessar pq é privada
//echo $civic->vidro . "<br>";

echo $civic->getVidro() . "<br>";

echo "<br>";

$augusto = new Mecanico;

$augusto->alterarRodas($civic);

// Não podemos acessar pq é privada
// $augusto->colocarPelicula($civic, "G20");

$civic->setVidro("G20");

echo $civic->rodas . "<br>";
echo $civic->getVidro() . "<br>";
