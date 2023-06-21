<?php
    // Demande à l'utilisateur combien de lignes afficher
    echo "Veuillez entrer le nombre de lignes : ";
    $lignes = trim(fgets(STDIN));

    for ($i = 1; $i <= $lignes; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "\n";
    }
?>
