<?php
/*Ecrire un algo qui demande  un nombre de départ et qui ensuite lui affiche la somme des entiers jusqu'a ce nombre */

// Declaration des variables

$nbr= readline("tapez un nombre : ");
$a=0;
$res=0;
//boucle do while
do {
    // calcul
    $res+=$a;
    // incrémentation
    $a++;
    //condition d'arrêt de la boucle
} while ($a <= $nbr);
//affichage
echo $res;
?>