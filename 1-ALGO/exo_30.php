<?php

$nb1 = readline("Entrer un nombre");
$nb2 = readline("Entrer un nombre");
$count = abs($nb1);
$resultat = 0;
$negatif = -INF;

// if ($nb1 < 0 && $nb2 < 0) {
if (($nb1 < 0 && $nb2 > 0) || ($nb1 > 0 && $nb2 < 0)) { //si les deux sont negatif y'a déjà le "-", si un des deux non donc :
    $negatif = true;
} else {
    $negatif = false;
}

for ($i = 0; $i < $count; $i++) {
    $resultat += $nb2;
}

if ($negatif) {
    echo -$resultat." ".$negatif;
} else {
    echo $resultat." ".$negatif;
}

?>
