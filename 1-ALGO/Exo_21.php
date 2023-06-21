<?php
    // Demande un nombre de départ à l'utilisateur
    echo "Veuillez entrer un nombre de départ : ";
    $nombre = trim(fgets(STDIN));

    $factorielle = 1;
    // Calcule la factorielle du nombre
    for ($i = 1; $i <= $nombre; $i++) {
        $factorielle *= $i;
    }

    //Affichage du résultat
    echo "La factorielle de " . $nombre . " est " . $factorielle;
?>