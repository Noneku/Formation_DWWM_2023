<?php

// Modifier ensuite l'algorithme pour que le programme affiche de surcroît en quelle position avait été saisie ce nombre

$nbMax = null; 
$nb = 1;
$i=1;
$position = null;

while ($nb != 0) {

        $nb = readline("Entrez le numéro: ");
        echo "\n";
        echo "la position est ". $i++;
        echo "\n";

        if ($nb > $nbMax) {

            echo "le chiffre maximum est ".$nbMax = $nb;
            echo "\n";

        } else {

            echo "le chiffre $nb n'est pas plus grand que $nbMax";
            echo "\n";
        }

    }

?>


