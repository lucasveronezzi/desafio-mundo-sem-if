<?php
namespace Lucas\Persons;

abstract class Person
{
    protected $shift;

    public function __construct($shift)
    {
        $this->shift = $shift;
    }

    protected function shiftWork() : String
    {
        $shift = $this->shift;
        
        return $this->$shift();
    }

    abstract protected function day() : String;

    abstract protected function night() : String;

    abstract public function work() : String;
}
