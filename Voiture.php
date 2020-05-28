<?php

class Voiture
{
    public $marque;
    public $couleur;

    public function demarrer()
    {
        echo 'vroum vroum';
    }

    public function arreter()
    {
        echo 'Pummm';
    }

    public function klaxonner()
    {
        echo 'pim pim';
    } 

    private function relierFilRougeAuFilBleu()
    {
        
    }
}