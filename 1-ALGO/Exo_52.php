<?php
// Tableau de nombres pairs et impairs
    $T = array(1, 2, 3, 4, 5, 6, 7, 8, 9);  
    $pairCount = 0;  
    $impairCount = 0;  

// Boucles for    
    for ($i = 0; $i < count($T); $i++) {
        if ($T[$i] % 2 == 0) {  
            $pairCount++;  
        } else {  
            $impairCount++;  
        }
    }

// Affichage du résultat
    echo "Le nombre d'entiers pairs est " . $pairCount . " ";
    echo "Le nombre d'entiers impairs est " . $impairCount;
?>
