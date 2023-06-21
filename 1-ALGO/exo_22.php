<?php

// Ecrire un algorithme qui demande successivement 20 nombres à l'utilisateur, et qui lui dit ensuite quel était le plus grand parmis ces 20 nombres.

$nbMax = null; 

for ($i= 1; $i<=20; $i++) {

    $nb = readline("Entrez le numéro: ");
    

    if ($nb > $nbMax) {

        echo "le chiffre maximum est ".$nbMax = $nb;
        echo "\n";

    } else {

        echo "le chiffre $nb n'est pas plus grand que $nbMax";
        echo "\n";
    }
}

?>