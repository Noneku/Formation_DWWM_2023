<?php

//  saisir des chiffres et indiquer s'ils sont  positifs ou negatifs et combien au total + remplir le tableau 


// Variables 
// Entrer le nombre de saisie 
$nbSaisie = readline("Entrez le nombre de saisie: ");
$tableau = array();
$nbNegatif =null;
$nbPositif =null;

// boucle 
for ($i =0; $i < $nbSaisie; $i++ ) {
    
    // remplit le tableau pour chaque saisie et à chaque tour de boucle grace à $tableau[si]
    $tableau[$i] = readline("Entrez un chiffre: ");

    // condition qui va filtrer les chiffres + ou -, si $tableau[$i] soit le nombre saisie est inférieur à zéro alors négatif, autre positif 
    if ( $tableau[$i] < 0) {
        echo  "le chiffre est negatif";
        // stockage nb negatif 
        $nbNegatif++;
        echo "\n";
    } else {
        echo " le chiffre est positif";
        // stockage nb positif
        $nbPositif++;
        echo "\n";
    }
    
}



echo "\n";
// affichage tableau remplit 
print_r($tableau);
echo "\n";
// affichage nb - ou +
echo " il y a : ".$nbPositif . "nombre(s) positif(s)";
echo "\n";
echo " il y a : ".$nbNegatif . "nombre(s) negatif(s)"


?>