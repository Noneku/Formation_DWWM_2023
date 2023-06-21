<?php
// Ecrivez un algorithme qui permette la saisie d'un nombre quelconque de valeurs. Toutes les valeurs doivent être ensuiote augmentées de 1, et le nouveau tableau sera affiché à l'écran. 

// Saisie Variables
$nombreValeurs = readline("Combien de valeurs voulez-vous entrer ? ");

// Création du tableau
$tableau = [];

// Boucle de saisie des valeurs
for ($i = 0; $i < $nombreValeurs; $i++) {
$valeur = readline("Entrez une valeur : ");
   
// Augmentation de la valeur de 1 et ajout au tableau
$tableau[$i] = $valeur + 1;
}

// Affichage du nouveau tableau
print_r($tableau)

?>