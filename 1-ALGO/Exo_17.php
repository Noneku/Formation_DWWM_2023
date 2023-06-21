<?php

/* EXO 17 : Ecrire un algo qui demande deux nombres à l'utlisateur et l'informe ensuite si le produit est négatif ou positif. 
( on inclut cette fois le traitement du cas où le produit peut être nul).*/


//Declarations
$nbrA = readline("Saisir le nombre A : ");
$nbrB = readline("Saisir le nombre B : ");


//Instructions

if(($nbrA < 0 and $nbrB < 0 ) || ($nbrA > 0 and $nbrB > 0)){
 //affichage true : si le produit est positif
    echo "Le produit de $nbrA et $nbrB est positif";

}
elseif ($nbrA == 0 or $nbrB == 0 ){
    //affichage  : si le produit est nul
    echo "Le produit de $nbrA et $nbrB est nul";
}
    else 
    //affichage  : si le produit est négatif
    echo "Le produit de $nbrA et $nbrB est négatif";


?>
