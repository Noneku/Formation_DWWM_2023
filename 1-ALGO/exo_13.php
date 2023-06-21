<?php

// Ecrire un algorithme qui demande un nombre d'utilisteur,et l'informe ensuite si ce nombre est positif ou négatif (on laisse de côté le cas où le nombre vaut zéro)


// Demande à l'utilisateur de saisir un nombre

$nombre = readline("Entrez un nombre : ");

// Vérifie si le nombre est positif ou négatif
if ($nombre > 0) {
    
   
echo "Le nombre est positif.";
} else {
    
   
echo "Le nombre est négatif.";
}

?>