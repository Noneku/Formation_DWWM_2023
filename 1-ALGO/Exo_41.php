<?php
// Tableau initial
$tab = array('D', 'E', 'C', 'A', 'L', 'A', 'G', 'E');

// Décalage à gauche
$decal = $tab[0]; // Sauvegarde du premier élément

// Boucle for pour déplacer les éléments vers la gauche
for ($i = 0; $i < count($tab) - 1; $i++) {
    // Déplacement des éléments
    $tab[$i] = $tab[$i + 1]; 
}
// Remplacement du dernier élément par le premier élément sauvegardé
$tab[count($tab) - 1] = $decal; 

// Affichage du tableau modifié
for ($i = 0; $i < count($tab); $i++) {
    echo $tab[$i] . " ";
}
?>
