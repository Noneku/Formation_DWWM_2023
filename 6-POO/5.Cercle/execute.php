<?php
include "cercle.class.php";
$x= readline("Saisissez une abscisse : ");
$y= readline("Saisissez une ordonnée : ");
$R = readline('Saisissez le rayon : ');
$cercle = new Cercle($x, $y, $R);
$cercle ->afficher();
echo "\n";


