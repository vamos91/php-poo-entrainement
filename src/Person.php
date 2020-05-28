<?php

namespace Acme;

class Person
{
    private $nom;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function favorite(Team $team)
    {
        $team->favorite();
    }
}