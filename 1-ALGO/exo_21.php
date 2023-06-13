<?php

/*Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.*/

//Declarations
$nbr = readline("Saisir un nombre : ");
$i = 1;
$fact= 1;


//Instruction
while($i <= $nbr){
    $fact = $fact * $i++;
}

//Affichage
echo "Pour $nbr, sa factorielle donne le resultat : $fact";


?>