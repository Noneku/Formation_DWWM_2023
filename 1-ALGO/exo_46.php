<?php

$tab = array(1, 2, 3, 4, 6, 7, 8, 9);
$nb = 5;
$tabModifie = array();

//remplir le $tabModifie jusqu'a 4
for ($j = 0; $j < $nb - 1; $j++) {
    $tabModifie[$j] = $tab[$j];
}

//inserer le $nb a l'index 4 = nb-1
$tabModifie[($nb - 1)] = $nb;

//ajouter la suite du $tab en commencant par l'index $nb;
for ($i = $nb; $i <= count($tab); $i++) {
    $tabModifie[$i] = $tab[$i - 1];
}

print_r($tabModifie);
