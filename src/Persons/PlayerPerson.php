<?php
namespace Lucas\Persons;

class PlayerPerson extends Person
{
    protected function day() : String
    {
        return 'É dia: Estou trabalhando agora!';
    }

    protected function night() : String
    {
        return 'É noite: Estou jogando agora!';
    }

    public function work() : String
    {
        return "Sou um jogador de LOL e não programo, pois meu é papel é jogar joguinho!\n". $this->shiftWork();
    }
}
