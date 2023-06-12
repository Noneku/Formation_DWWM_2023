<?php
/*Ecrire un algo qui demande  un nombre de départ et qui ensuite lui affiche la somme des entiers jusqu'a ce nombre */

// Declaration des variables

$nbr= readline("tapez un nombre : ");
$a=1;
$res=1;
//boucle do while
do {

    // calcul

    $res*=$a;//equivaut à $res=$a*$res

    // incrémentation
    $a++;//equivaut a $a = $a+1
    
    //condition d'arrêt de la boucle
} while ($a <= $nbr);
//affichage
echo 'la factorielle de ' .$nbr. ' est ' .$res;
?>