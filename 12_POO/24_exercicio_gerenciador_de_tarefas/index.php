<?php

class Task
{
    public $title;
    public $description;
    public $completed;

    public function markAsCompleted()
    {
        $this->completed = true;
    }

    public function markAsIncomplete()
    {
        $this->completed = false;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function isCompleted()
    {
        return $this->completed;
    }
}

$programming = new Task;

$programming->title = "Programação diária";
$programming->description = "Fazer exercícios de POO";
$programming->markAsCompleted();

echo "Dados acerca da tarefa: " . $programming->getTitle() . "<br><br>";

echo "Descrição: " . $programming->getDescription() . "<br>";

if ($programming->isCompleted()) {
    echo "Status: Tarefa concluída <br>";
} else {
    echo "Status: Tareda não concluída <br>";
}
