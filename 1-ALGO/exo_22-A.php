<?php

// Déclaration :
    $pg = 0;
    $nb = 0;

// Instruction : 
    
for ($i = 0; $i <= 19; $i++) {
    
    $nb = readline("Entrez un nombre : ");

        if ($pg < $nb) {
            $pg = $nb;
        }
    }


// Affichage :
echo "Le plus grand nombre est ".$pg;
?>