<?php

// Ecrire un algo qui demande un nb à l'utilisateur, et l'informe ensuite si ce nb est positif ou négatif (on laisse de côté le cas où le nb vaut 0)

// Déclaration : 
$nb = readline("Entrez un nombre : ");


// Instruction / Affichage : 
if ($nb>0) {
    echo "$nb est un nombre positif.";
} else {
    echo "$nb est un nombre négatif.";
}




?>