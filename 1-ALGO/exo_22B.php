<?php

// Modifier ensuite l'algorithme pour que le programme affiche de surcroît en quelle position avait été saisie ce nombre

$nbMax = null; 

for ($i= 1; $i<=5; $i++) {

    $nb = readline("Entrez le numéro: ");

    if ($nb > $nbMax) {

        echo "le chiffre maximum est ".$nbMax = $nb." en position $i";
        // echo " la position est $i";
        echo "\n";

    } else {

        echo "le chiffre $nb n'est pas plus grand que $nbMax";
        echo "\n";
    }
}

?>

 <!-- Modifier ensuite l'algorithme pour que le programme affiche de surcroît en quelle position avait été saisie ce nombre

// Variables 
$nb2 = 0;
$pos = 0;

// Instruction 
for ($i = 0; $i < 20; $i++) {
    $a = readline("Entrer un nombre");
    if ($nb2 < $a) {
    $nb2 = $a;
    $pos = $i+1;
    }
}

// Affichage 
echo "$nb2 en $pos"; -->