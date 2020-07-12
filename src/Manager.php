<?php
namespace Lucas;

abstract class Manager
{
    public function driver($driver)
    {
        $creater = 'create' . ucwords($driver);

        return $this->$creater();
    }
}
