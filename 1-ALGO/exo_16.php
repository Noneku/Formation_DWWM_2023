<?php

// Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre vaut zéro)

// Demande à l'utilisateur d'entrer un nombre

$nombre = readline("Entrez un nombre : ");

// Vérifie si le nombre est positif, négatif ou nul
if ($nombre > 0) {
    echo "Le nombre est positif.";
}

elseif ($nombre < 0) {

    echo "Le nombre est négatif.";

} 

else {
    echo "Le nombre est nul.";
}


?>