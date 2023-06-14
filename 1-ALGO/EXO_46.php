<?php
$T = array(1, 12, 15, 17);
$x = readline("Enter une valeur x: ");
$T[4] = $x;

$minIndex = 0;
$temp = 0;
// Tri par sélection
for ($i = 0; $i < count($T); $i++) {
    $minIndex = $i;
    for ($j = $i + 1; $j < count($T); $j++) {
        if ($T[$j] < $T[$minIndex]) {
            $minIndex = $j;
        }
    }
    // Échange des valeurs
    $temp = $T[$i];
    $T[$i] = $T[$minIndex];
    $T[$minIndex] = $temp;
}

// Affichage du tableau trié
for ($i = 0; $i < count($T); $i++) {
    echo $T[$i] . " ";
}
