<?php
    // Demande le premier nombre à l'utilisateur
    echo "Veuillez entrer le premier nombre : ";
    $nombre1 = trim(fgets(STDIN));

    // Demande le deuxième nombre à l'utilisateur
    echo "Veuillez entrer le deuxième nombre : ";
    $nombre2 = trim(fgets(STDIN));

    $resultat = 0;

    // Boucle "for" pour effectuer la "multiplication" en ne faisant que des additions
    for ($i = 0; $i < $nombre2; $i++) {
        $resultat += $nombre1;
    }

    // Affiche le résultat
    echo "Le produit de " . $nombre1 . " et " . $nombre2 . " est : " . $resultat;
?>
