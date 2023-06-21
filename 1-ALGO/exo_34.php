<?php
// Ecrivez un algorithme calculant la somme des valeurs d'un tableau (on suppose que le tableau a été préalablement saisi).

// Tableau d'exemple
$tableau = [1, 2, 3, 4, 5];
$somme = 0;

// Calcul de la somme
$tailleTableau = count($tableau);

// Boucle for
for ($i = 0; $i < $tailleTableau; $i++) {
    $somme += $tableau[$i];
}

// Affichage du résultat
echo "La somme des valeurs du tableau est : " . $somme;

?>
