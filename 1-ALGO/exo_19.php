<?php
/* Ecrire un algo qui demande un nombre de départ, et qui ensuite affiche les dix nombres suivants. 
Par exemple, si l'utlisateur entre le nombre 17, le programme affichera les nombres de 18 à 27. */

//Declaration

$nbr = readline("Saisir un nombre : ");

//Instruction

for ($i = 0; $i < 10 ; $i++){
    $nbr++;
    echo "\n".$nbr;
}

?>