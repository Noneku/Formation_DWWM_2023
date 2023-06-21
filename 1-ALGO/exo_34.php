<?php
    // Valeurs dans le tableau
    $nombres = array(1, 2, 3, 4, 5);

    $somme = 0;  

    // Boucle 
    for ($i = 0; $i < count($nombres); $i++) {
        $somme += $nombres [$i];
    }

    // Affichage de la somme
    echo "La somme des valeurs du tableau est : " . $somme;
?>
