<?php
    // Déclaration tableau
    $nombreValeurs = readline("Combien de valeurs voulez-vous entrer ? ");

    $tableau = array();  

    // Boucle pour la saisie des valeurs
    for ($i = 0; $i < $nombreValeurs; $i++) {
        $valeur = readline("Entrez la valeur numéro " . ($i+1) . ": ");
        $tableau[] = $valeur;
    }

    // Boucle pour augmenter chaque valeur de 1
    for ($i = 0; $i < $nombreValeurs; $i++) {
        $tableau[$i] += 1;
    }

    // Affichage du nouveau tableau
    print_r($tableau);
?>
