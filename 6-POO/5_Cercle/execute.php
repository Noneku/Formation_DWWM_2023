<?php

include"Cercle.class.php";

$abcisse=readline("Donner l'abscisse du cercle : ");
$ordonnee=readline("Donner l'ordonnee du cercle : ");
$rayon=$abcisse=readline("Donner le rayon du cercle : ");
$abcisse=readline("Donner l'abscisse du point : ");
$ordonnee=readline("Donner l'ordonnee du point : ");

$point=new Point(2,3);
$c=new Cercle($abcisse,$ordonnee,$rayon);
echo $c->afficher($point);
echo"\n";














