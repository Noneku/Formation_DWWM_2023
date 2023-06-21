<?php
// Tableau dans l'ordre croissant
    $T = array(1, 2, 3, 5, 6, 7, 8, 9);
// Nombre à insérer dans le tableau      
    $X = 4;  

    $N = count($T);  

    // Boucle while
    $i = 0;
    while ($i < $N && $T[$i] < $X) {
        $i++;
    }

    // Boucle for
    for ($j = $N; $j > $i; $j--) {
        $T[$j] = $T[$j - 1];
    }

    // Insérez X à la position d'insertion
    $T[$i] = $X;

    //Affichage du résultat
    print_r($T);
?>
