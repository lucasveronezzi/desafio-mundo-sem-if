<?php
namespace Lucas\Persons;

class DancerPerson extends Person
{
    protected function day() : String
    {
        return 'É dia: Estou dançando!';
    }

    protected function night() : String
    {
        return 'É noite: Não me amole... estou dormindo!';
    }

    public function work() : String
    {
        return "Sou um dançarino e gostaria de programar, mas tenho coisas mais importantes para fazer!\n ". $this->shiftWork();
    }
}
