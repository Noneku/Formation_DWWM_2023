<?php

/* EXO 17 : Ecrire un algo qui demande deux nombres à l'utlisateur et l'informe ensuite si le produit est négatif ou positif. 
( on inclut cette fois le traitement du cas où le produit peut être nul).*/


//Declarations
$nbX = readline("Saisir un nombre : ");
$nbY = readline("Saisir un nombre : ");


//Instructions

if(($nbX < 0 && $nbY < 0 ) || ($nbX > 0 && $nbY > 0)){
 //affichage true : si le produit est positif
    echo "Le produit de $nbX et $nbY est positif";

}
elseif ($nbX == 0 or $nbY == 0 ){
    //affichage true : si le produit est nul
    echo "Le produit de $nbX et $nbY est nul";

}  else {
    //affichage false : si le produit est négatif
    echo "Le produit de $nbX et $nbY est négatif";
    }

?>
