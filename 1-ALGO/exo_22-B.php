<?php
    #Déclaration des variables
    $pg = 0;
    $nb = 0;
    //$nbPos = 0;

    #Traitement
    for ($i = 0; $i <= 19; $i++) {
        
        $nb = readline("Entrez un nombre : ");

        if ($pg < $nb) {
            $pg = $nb;
            $nbPos = $i+1;
        }
    }


// Affichage :
echo "Le plus grand nombre est ".$pg;
echo " il est en position ".$nbPos;

?>