<?php

class A
{
    public function toto()
    {
        echo 'je suis la method toto appelé depuis la class A';
    }
}

class B extends A
{
    public function tata()
    {
        parent::toto();
        echo 'je suis la methode tata appelé depuis la class B';
    }
}

$b = new B;
$b->toto();