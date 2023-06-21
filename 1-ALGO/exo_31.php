<?php
// Ecrire un algorithme qui déclare et remplisse un tableau contenant les six voyelles de l'alphabet latin.
// Déclaration du tableau

// Variables 
$voyelles = array();

// Remplissage du tableau avec les voyelles
$voyelles[] = 'a';
$voyelles[] = 'e';
$voyelles[] = 'i';
$voyelles[] = 'o';
$voyelles[] = 'u';
$voyelles[] = 'y';

// Affichage du tableau à l'aide d'un foreach 
foreach ($voyelles as $voyelle) {
    echo $voyelle . ' ';
}

?>