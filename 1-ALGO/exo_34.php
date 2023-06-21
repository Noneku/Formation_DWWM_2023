<?php
// Création de tableau 
$tab = array();

// Variables pour stocké le résultat
$resultat = 0;

// Valeurs du tableau 
$tab[0] = "5";
$tab[1] = "4";
$tab[2] = "7";
$tab[3] = "8";
$tab[4] = "9";

print_r($tab);

// Boucle 
for ($i=0; $i< count($tab); $i++) { 
    $resultat += $tab[$i];
}

// Affichage
echo "Le résultat de la somme est : $resultat ";

?>