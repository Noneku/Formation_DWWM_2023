<?php

/*déclaration*/;

$nb1 = trim(fgets(STDIN));
$nb2 = trim(fgets(STDIN));



//calcul 

if (($nb1 ==0 ) || ($nb2 ==0)) {
    echo "le produit est nul";}

    elseif (($nb1 > 0 and $nb2 > 0) || ($nb1 < 0 and $nb2 < 0)) {
        echo "Le produit est positif";
    }
else {
    echo "Le produit est négatif";
 }


 ?>
