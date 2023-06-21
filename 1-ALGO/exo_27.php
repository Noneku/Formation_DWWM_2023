<?php
    // Demande la note d'oral à l'utilisateur
    echo "Veuillez entrer la note d'oral : ";
    $noteOral = trim(fgets(STDIN));

    // Demande la note d'écrit à l'utilisateur
    echo "Veuillez entrer la note d'écrit : ";
    $noteEcrit = trim(fgets(STDIN));

    // Calcule la moyenne
    $moyenne = ($noteOral * 1 + $noteEcrit * 2) / 3;

    // Affiche le résultat
    if ($moyenne >= 10) {
        echo "Le module est validé. Votre moyenne est : " . $moyenne;
    } else {
        echo "Le module n'est pas validé. Votre moyenne est : " . $moyenne;
    }
?>
