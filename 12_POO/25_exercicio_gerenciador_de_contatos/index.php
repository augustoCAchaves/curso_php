<?php

class Contact
{
    private $name = "Renata";
    private $email;
    private $phone;

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}

$mae = new Contact;

echo "Nome do contato: " . $mae->getName() . "<br>";

$mae->setEmail("renataarantes332015@outlook.com");

echo "Email do contato: " . $mae->getEmail() . "<br>";

$mae->setPhone("62984736854");

echo "Número do contato: " . $mae->getPhone() . "<br>";
