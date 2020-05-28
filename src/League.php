<?php

namespace Acme;

class League
{
    private $name;
    private $teams;

    public function __construct($name)
    {
        $this->name = $name;
        $this->teams = [];
    }

    public function addTeam($team)
    {
        $this->teams[] = $team;
    }

    public function getCountTeam()
    {
        return count($this->teams);
    }
}