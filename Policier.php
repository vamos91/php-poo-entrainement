<?php

class Policier extends Person
{
    public function __contruct($first_name, $last_name, $age, $grade)
    {
        parent::__construct($first_name, $last_name, $age);
        $this->age = $age;
    }

    public function fullName()
    {
        $fullname = parent::fullName();
        return $fullname .', Policier';
    }
}