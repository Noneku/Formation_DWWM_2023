<?php
/*Ecrire un algo qui demande  un nombre de départ et qui ensuite lui affiche les dix nombre suivant */
// Declaration des variables

$nbr= readline("tapez un nombre : ");

//boucle for
for ($i=0; $i < 10; $i++) { 
    //calcul
    ++$nbr;
    //affichage
    echo "nombre :".$nbr."\n ";
}

?>