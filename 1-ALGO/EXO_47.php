<?php


$T = [1, 3, 5, 7, 9];  // Exemple de tableau trié
$x = readline("entrer un numéro");
  // Élément à insérer

$n = count($T);  // Longueur actuelle du tableau
$T[] = null;     // Ajouter un espace supplémentaire à la fin du tableau pour l'élément à insérer

$i = $n;
$trier = true;

while ($i > 0 && $trier) {
    if ($x < $T[$i-1]) {
        $T[$i] = $T[$i-1];  // Décaler les éléments vers la droite
        $i--;
    } else {
        $trier = false;
    }
}

$T[$i] = $x;  // Insérer l'élément x à la bonne position dans le tableau

print_r($T);  // Afficher le tableau mis à jour



?>