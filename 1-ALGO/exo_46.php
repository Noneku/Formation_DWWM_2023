<?php
// Soit T un tableau rangés dans l'ordre croissant. Ecrire un algorithme qui insère un élément donné X dans le tableau T en respectant l'ordre croissant? 

// Déclaration du tableau
$tabT = array(1,2,4,5);

$x = 3;// Element à inserer 

$n = count($tabT);
$nouveauTab = array();

$insere = 0; // Variable pour indiquer si l'élément a été inséré
$i = 0; // Indice de parcours du tableau initial


// Parcours du reste des éléments du tableau initial
while ($i < $n && $tabT[$i] < $x) {
    $nouveauTab[] = $tabT[$i];
    $i++;
}

$nouveauTab[] = $x;

while ($i < $n) {
    $nouveauTab[] = $tabT[$i];
    $i++;
} 

// Affichage
print_r($nouveauTab);

?>