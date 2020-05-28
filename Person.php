<?php

class Person
{
    public $first_name;
    public $last_name;
    public $age;
    protected static $totalCount = 0;

    public function __construct($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;

        static::$totalCount++;
    }

    public static function getTotalCount()
    {
        return static::$totalCount;
    }

    public function danser()
    {
        return $this->first_name . ' ' . 'est en train de danser.';
    }

    public function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

$nicolas = new Person('nicolas', 'acard', '40');
$bruno = new Person('bruno', 'acard', '36');

// echo Person::getTotalCount();
