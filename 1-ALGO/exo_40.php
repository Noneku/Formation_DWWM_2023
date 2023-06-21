<?php

// Crée les 12 tableau de 8 valeurs
$T = array(
    array(5, 2, 9, 1, 4, 7, 6, 3),
    array(8, 6, 3, 2, 5, 9, 1, 4),
    array(7, 1, 4, 6, 3, 2, 8, 9),
    array(3, 9, 1, 4, 6, 8, 7, 2),
    array(2, 5, 8, 9, 1, 4, 6, 3),
    array(4, 7, 6, 3, 2, 5, 9, 1),
    array(9, 1, 4, 7, 6, 3, 2, 8),
    array(6, 3, 2, 8, 9, 1, 4, 7),
    array(1, 4, 7, 6, 3, 2, 5, 9),
    array(8, 9, 1, 4, 7, 6, 53, 2),
    array(5, 8, 9, 1, 4, 7, 6, 3),
    array(7, 6, 3, 2, 5, 9, 1, 4)
);

// Création de pg pour récupéré la valeur située à la première ligne et à la première colonne du tableau
$pg = $T[0][0];

// Création de deux boucle pour parcourir toute les ligne et les colonnes du tableau pour récupéré la valeur la plus grande
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 8; $j++) {
        // Étape 3i
        if ($T[$i][$j] > $pg) {
            // Étape 3i1
            $pg = $T[$i][$j];
        }
    }
}

// Afficher la plus grande valeur
echo "La plus grande valeur dans le tableau est : " . $pg;
?>




