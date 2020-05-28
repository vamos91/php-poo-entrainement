<?php

require 'Forme.php';
require 'Carre.php';
require 'Triangle.php';
require 'Cercle.php';
require 'Person.php';
require 'Policier.php';

// $carre = new Carre;
// $resultat = $carre->aire();
// $triangle = new Triangle;
// $resultat = $triangle->aire();
// $cercle = new Cercle;
// $resultat = $cercle->aire();
$flic1 = new Policier('nicolas', 'acard', 40);
$resultat = $flic1->fullName();

echo $resultat;