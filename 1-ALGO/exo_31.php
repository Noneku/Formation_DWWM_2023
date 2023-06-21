<?php

// Déclaration du tableau
$voyelles = array();

// Remplissage du tableau avec les voyelles
$voyelles[] = 'a';
$voyelles[] = 'e';
$voyelles[] = 'i';
$voyelles[] = 'o';
$voyelles[] = 'u';
$voyelles[] = 'y';

// Affichage du tableau
echo "Les voyelles de l'alphabet latin sont : ";

// La boucle pour parcourir les éléments du tableau 
for ($i = 0; $i < count($voyelles) ; $i++) {
    echo $voyelles[$i] . " ";
}

?>
