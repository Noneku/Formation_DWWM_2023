<?php
// Tableau de valeurs
    $T = array(55,12,36,68,44,18,7,50);  

    $maxValue = $T[0];  

// Boucle for avec if
    for ($i = 1; $i < count($T); $i++) {  // Parcourez le tableau à partir du deuxième élément
        if ($T[$i] > $maxValue) {  // Si l'élément actuel est plus grand que la valeur max
            $maxValue = $T[$i];  // Mettez à jour la valeur max
        }
    }

// Affichage du résultat    
    echo "La valeur maximale est " . $maxValue;
?>
