<?php
    // Demande la première variable à l'utilisateur
    echo "Veuillez entrer le premier nombre : ";
    $nombre1 = trim(fgets(STDIN));

    // Demande la deuxième variable à l'utilisateur
    echo "Veuillez entrer le deuxième nombre : ";
    $nombre2 = trim(fgets(STDIN));

    // Calcule et affiche la moyenne
    $moyenne = ($nombre1 + $nombre2) / 2;
    echo "La moyenne des deux nombres est : " . $moyenne;
?>
