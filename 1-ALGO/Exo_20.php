<?php
    // Demande un nombre de départ à l'utilisateur
    echo "Veuillez entrer un nombre de départ : ";
    $nombre = trim(fgets(STDIN));
    $somme = 0;

    // Calcule la somme des entiers jusqu'à ce nombre
    for ($i = 1; $i <= $nombre; $i++) {
        $somme += $i;
    }

    //Résultat
    echo "La somme des entiers jusqu'à " . $nombre . " est " . $somme;
?>