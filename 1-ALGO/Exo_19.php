<?php
    // Demande un nombre de départ à l'utilisateur
    echo "Veuillez entrer un nombre de départ : ";
    $nombre = trim(fgets(STDIN));

    // Affiche les dix nombres suivants
    for ($i = 1; $i <= 10; $i++) {
        echo $nombre + $i . " ";
    }
?>