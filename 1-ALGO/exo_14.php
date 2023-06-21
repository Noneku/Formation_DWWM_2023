<?php
    // Demande deux nombres à l'utilisateur
    echo "Veuillez entrer le premier nombre non nul : ";
    $nombre1 = trim(fgets(STDIN));

    echo "Veuillez entrer le second nombre non nul : ";
    $nombre2 = trim(fgets(STDIN));

    // Vérifie si le produit est positif ou négatif sans calculer le produit
    if (($nombre1 > 0 && $nombre2 > 0) || ($nombre1 < 0 && $nombre2 < 0)) {
        echo "Le produit des deux nombres serait positif.";
    } else {
        echo "Le produit des deux nombres serait négatif.";
    }
?>