<?php
function puissance($base, $exposant = 2) {
    return pow($base, $exposant);
}

echo puissance(2); // Résultat : 4
echo PHP_EOL;      // Saut de ligne pour l'affichage dans la console
echo puissance(2, 3); // Résultat : 8
