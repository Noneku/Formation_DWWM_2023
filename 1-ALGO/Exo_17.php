<?php
    // Demande deux nombres à l'utilisateur
    echo "Veuillez entrer le premier nombre : ";
    $nombre1 = trim(fgets(STDIN));

    echo "Veuillez entrer le second nombre : ";
    $nombre2 = trim(fgets(STDIN));

    // Vérifie si le produit serait positif, négatif ou zéro sans calculer le produit
    if ($nombre1 == 0 || $nombre2 == 0) {
        echo "Le produit des deux nombres est nul.";
    } else if (($nombre1 > 0 && $nombre2 > 0) || ($nombre1 < 0 && $nombre2 < 0)) {
        echo "Le produit des deux nombres serait positif.";
    } else {
        echo "Le produit des deux nombres serait négatif.";
    }
?>