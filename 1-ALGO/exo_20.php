<?php
/*Ecrire un algo qui demande un nombre de départ, et qui cacule la somme des entiers jusqu'à ce nombre. Par exemple, si l'on entre 5, 
le programme doit calculer : 1 + 2 + 3 + 4 + 5 = 15*/


//Instructions

$nbr = readline("Saisir un nombre : ");
$i = 0;
$som= 0;

//Declarations

while($i <= $nbr){
       
    $som += $i++;
   
       

}

echo $som;


?>