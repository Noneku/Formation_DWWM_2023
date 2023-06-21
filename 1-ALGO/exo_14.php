<?php

//  Ecrire un algorithme qui demande un nombre à l'utilisateur et l'informe ensuite si ce nombre est positif ou négatif ( on laisse de coté ou le nombre vaut 0)
// on ne calcul pas le produit des 2 nombres 

echo " Entrez votre premier nombre : ";
$nb1 =  trim(fgets(STDIN));

echo " Entrez votre deuxieme nombre : ";
$nb2 =  trim(fgets(STDIN));

$condition1 = $nb1 <0;
$condition2= $nb2 <0;

// || = ou;  c'est soit vrai ou soit faux mais pas les deux 

if ($condition1  ||  $condition2) {

    echo " votre nombre est négatif";
} else {
    echo " votre nombre est positif";
}

?>