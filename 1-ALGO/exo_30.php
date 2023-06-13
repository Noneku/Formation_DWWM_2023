<?php
/*Donner le résultat de la multpilication de deux nombres en ne faisant qye des additions */ 


//Declaration
$nbr1 = readline("Saisir nombre 1 : ");
$nbr2 = readline("Saisir nombre 2 : ");
$stock = 0;
$i=0;

//Instruction
while ($i<$nbr2){
    //$i boucle autant de fois que le second nombre
    $stock += $nbr1;
    //$stock additionne le nombre 1 autant de fois qu'il passera dans la boucle via le nbr2

    //Incrementation de 1
    $i++;
}
//Affichage du resultat
echo $stock;



?>