<?php

// Modifier ensuite l'algorithme pour que le programme affiche de surcroît en quelle position avait été saisie ce nombre

$nbMax = null; 
$position = null;

for ($i= 1; $i<=5; $i++) {

    $nb = readline("Entrez le numéro: ");

    if ($nb > $nbMax) {

        echo "le chiffre maximum est ".$nbMax = $nb;

        // stockage de la position , à chaque tour de boucle,  $position va etre incrémenté de +1
        $position++;

        echo "\n";

    } else {

        echo "le chiffre $nb n'est pas plus grand que $nbMax en position $position";
        echo "\n";
    }
}


?>
