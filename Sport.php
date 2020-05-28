<?php

require 'vendor/autoload.php';

$nicolas = new Acme\Person('nicolas');
$bruno = new Acme\Person('bruno');

$barcelone = new Acme\Team('Barcelone');
$realMadrid = new Acme\Team('Real de Madrid');

$nicolas->favorite($barcelone);
$bruno->favorite($realMadrid);
$bruno->favorite($barcelone);

echo $barcelone->getName() . 'a' . $barcelone->getNbFan() . 'fan' . PHP_EOL;
echo $realMadrid->getName() . 'a' . $realMadrid->getNbFan() . 'fan' . PHP_EOL;

$liga = new Acme\League("Liga");
$liga->addTeam($barcelone);
$liga->addTeam($realMadrid);
echo $liga->getCountTeam() . PHP_EOL;
