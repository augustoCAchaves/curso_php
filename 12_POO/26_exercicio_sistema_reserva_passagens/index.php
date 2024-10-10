<?php

class Passenger
{
    private $name = "Maria";
    private $age = 30;
    private $seatNumber = 'A12';

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
    }
}

$passenger1 = new Passenger;

echo "Dados do passageiro(a): " . $passenger1->getName() . "<br>";
echo "Idade: " . $passenger1->getAge() . "<br>";
echo "Assento: " . $passenger1->getSeatNumber() . "<br>";

$passenger1->setSeatNumber("B22");

echo "Novo assento: " . $passenger1->getSeatNumber() . "<br>";
