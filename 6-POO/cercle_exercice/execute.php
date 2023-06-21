<?php


include("point.class.php");

// declaration de variable
$x = readline("Donner l'abcisse du centre: ");
$y = readline("Donner l'ordonné du centre: ");
$rayon = readline("Donner le rayon : ");
echo "\n";

// instanciation de classe : consiste à la création de l'objet 
$cercle = new Point ($x, $y, $rayon);

// affichage des informations
echo $cercle->afficher()."\n";

// Calcul du périmetre et de la surface
echo "Le perimetre est ".$cercle->getPerimetre()."\n";
echo "La surface est : ".$cercle->getAire()."\n";
echo "\n";

// Calcul du point : déclaration des points 
$a = readline("Donner le point 1 : ");
$b = readline("Donner le point 2 : ");

// affichage des points
echo $cercle ->afficherPoint($a, $b)."\n";

// appel de fonction avec les points en parametre, stockage du résultat dans la varible $distance 
$distance = $cercle->distance($a, $b);

// affichage du résultat
echo $distance;
echo "\n";

// appel de fonction if avec en parametre la varibale précédente + stockage du return true ou false
$resultat = $cercle->appartient($distance);

// Convertir le résultat true ou false en string, stockage du resultat converti dans la varible $bool
$bool = $resultat ? 'Le point appartient au cercle' : 'Le point est hors du cercle';

// affichage du resultat sous format string
echo $bool;

?>