<?php
    $tableau = array('D', 'E', 'C', 'A', 'L', 'A', 'G', 'E');

    // stocke le premier élément du tableau
    $premierElement = $tableau[0];

    // Boucle for 
    for ($i = 0; $i < count($tableau) - 1; $i++) {
        $tableau[$i] = $tableau[$i + 1];
    }

    // place le premier élément à la fin du tableau
    $tableau[count($tableau) - 1] = $premierElement;

    //Affichage du tableau
    print_r($tableau);
?>
