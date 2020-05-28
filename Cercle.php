<?php

class Cercle extends Forme
{
    private $rayon = 100;

    public function aire()
    {
        return (3.14 * ($this->rayon ** 2));
    }
}