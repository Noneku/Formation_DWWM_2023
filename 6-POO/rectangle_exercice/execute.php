<?php

include("rectangle.class.php");

// Titre
echo " rectangle 1";
echo "\n";

// Saisie des données 
$x = readline("Donner la longuer du rectangle: " );
$y = readline ("Donner la largeur du rectangle ");

// On appelle l'opération qui consiste à créer un objet : "instanciation" et l'objet ainsi créé peut aussi être appelé instance de classe. 
$rectangle1 = new Rectangle($x, $y);

// Afficher / appeler notre fonction
echo $rectangle1->perimetre();
echo "\n";
echo $rectangle1 ->aire();
echo "\n";
$rectangle = $rectangle1 ->estCarre();
$bool = $rectangle ? 'Pas un carré' : 'Un carré';

echo $bool;
echo "\n";
echo "\n";

echo "rectangle 2";
echo "\n";

$x = readline("Donner la longuer du rectangle: " );
$y = readline ("Donner la lageur du rectangle ");
$rectangle2 = new Rectangle($x , $y);
$rectangle = $rectangle2 ->afficherRectangle();
echo $rectangle;

?>