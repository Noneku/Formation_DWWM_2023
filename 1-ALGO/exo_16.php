<?php
    // Demande un nombre à l'utilisateur
    echo "Veuillez entrer un nombre : ";

    // Récupère le nombre saisi par l'utilisateur
    $nombre = trim(fgets(STDIN));

    // Vérifie si le nombre est positif, négatif ou zéro
    if ($nombre > 0) {
        echo "Le nombre est positif.";
    } else if ($nombre < 0) {
        echo "Le nombre est négatif.";
    } else {
        echo "Le nombre est nul.";
    }
?>