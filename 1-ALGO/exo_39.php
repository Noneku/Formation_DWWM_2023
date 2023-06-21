<?php

// Saisie de l'utilisateur
$valeurs = readline("Combien de valeurs voulez vous ? ");

// Création d'un tableau 
$tab = array();
// Valeurs de la moyenne
$moyenne = 0;
// Variable pour stocker les notes au dessus de la moyennes
$comp = 0;

// Création d'une boucle POUR
for ($i=0; $i < $valeurs ; $i++) { 
    $notes = readline("Entrée vos notes : ");
    $tab[$i] = $notes;
    $moyenne += ($notes) / $valeurs;

    if ($notes > $moyenne) {
        $comp++;
        
    }
   
} 

print_r($tab);
echo "La moyenne est de $moyenne";
echo "\n";
echo "Il y a $comp nôtes au dessus de la moyenne";




?>