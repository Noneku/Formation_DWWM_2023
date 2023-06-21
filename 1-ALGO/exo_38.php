<?php
    // Variable
    $nombreValeurs = readline("Combien de valeurs voulez-vous entrer ? ");

    $tableau = array(); 

    // Boucle for pour la saisie des valeurs
    for ($i = 0; $i < $nombreValeurs; $i++) {
        $valeur = readline("Entrez la valeur numéro " . ($i+1) . ": ");
        $tableau[] = $valeur;
    }

    // Recherche de la plus grande valeur et de sa position
    $valeurMax = $tableau[0];
    $positionMax = 0;
    for ($i = 1; $i < $nombreValeurs; $i++) {
        if ($tableau[$i] > $valeurMax) {
            $valeurMax = $tableau[$i];
            $positionMax = $i;
        }
    }

    // Affichage 
    echo "La plus grande valeur est " . $valeurMax . " et elle se trouve à la position " . ($positionMax + 1) . " dans le tableau.";
?>
