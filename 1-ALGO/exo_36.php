<?php
    // Déclaration des deux tableaux
    $tableau1 = array(2, 5, 8, 4);
    $tableau2 = array(6, 7);

    $schtroumpf = 0;  

    // Parcourir chaque élément du tableau 1
    for ($i = 0; $i < count($tableau1); $i++) {

        // Parcourir chaque élément du tableau 2
        for ($j = 0; $j < count($tableau2); $j++) {
            $schtroumpf += $tableau1[$i] * $tableau2[$j];
        }
    }

    // Affichage du schtroumpf
    echo "Le Schtroumpf est : " . $schtroumpf;
?>