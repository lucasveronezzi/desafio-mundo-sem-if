<?php
namespace Lucas\Persons;

class DeveloperPerson extends Person
{
    protected function day() : String
    {
        return 'É dia: Estou programando agora!';
    }

    protected function night() : String
    {
        return 'É noite: Eu nunca paro de programar!';
    }

    public function work() : String
    {
        return "Sou um candango que programa e não tenho vida...\n". $this->shiftWork();
    }
}
