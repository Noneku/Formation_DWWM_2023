<?php
/* Modifiez ensuite l'algo pour que le programme affiche de surcoit en quelle position avait été saisie ce nombre. */

$nbr = readline("Saisir un nombre1 : ");
$position = 0;


//Instruction

for($i = 1; $i <= 20 ; $i++){

        $nbr2 = readline("Saisir nombre".$i." à comparer : ");

        if($nbr < $nbr2){
              $nbr = $nbr2;
            $position = $i;
        }
        
           
        
}

//Affichage 

echo "Le plus grand chiffre est $nbr, il se trouve en position $position .";


?>