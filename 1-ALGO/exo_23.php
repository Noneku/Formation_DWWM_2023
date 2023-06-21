<?php

// Réecrire l'algo précédent mais cette fois ci on ne connait pas d'avance combien l'utilisateur va entrer de saisie. Affiche de surcroît en quelle position avait été saisie ce nombre
// La saisie d'arette lorsque l'utilisateur entre un 0. 

$nbMax = null; 
$nb = 1;
$i=1;
$position = null;


while ($nb != 0) {
    
        $nb = readline("Entrez le numéro: ");

        $position++;
        

        if ($nb > $nbMax) {

            echo "le chiffre maximum est ".$nbMax = $nb;
            echo "\n";

    
        } else {
    
            echo "le chiffre $nb n'est pas plus grand que $nbMax en position : $position ";
            echo "\n";
        }

    }

?>