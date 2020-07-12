<?php
namespace Lucas;

use Lucas\Persons\Person;

class PersonManager extends Manager
{
    private $shift = null;

    public function __construct($shift)
    {
        $this->shift = $shift;
    }

    public function createDancer() : Person
    {
        return new Persons\DancerPerson($this->shift);
    }

    public function createDeveloper() : Person
    {
        return new Persons\DeveloperPerson($this->shift);
    }

    public function createPlayer() : Person
    {
        return new Persons\PlayerPerson($this->shift);
    }
}
