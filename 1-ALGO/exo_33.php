<?php

$nbSaisie = readline("Entrez le nombre de saisie: ");
$tableau = array();
$nbNegatif =null;
$nbPositif =null;

for ($i =0; $i < $nbSaisie; $i++ ) {

    $tableau[$i] = readline("Entrez un chiffre: ");

    if ( $tableau[$i] < 0) {
        echo  "le chiffre est negatif";
        $nbNegatif++;
        echo "\n";
    } else {
        echo " le chiffre est positif";
        $nbPositif++;
        echo "\n";
    }
    
}

echo "\n";
print_r($tableau);
echo "\n";
echo " il y a : ".$nbPositif . "nombre(s) positif(s)";
echo "\n";
echo " il y a : ".$nbNegatif . "nombre(s) negatif(s)"


?>