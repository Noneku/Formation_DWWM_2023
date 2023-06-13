<?php

/* Ecrire un algo qui demande succesivement 20 nombres à l'utlisateur, et qui lui dit ensuite quel etait le plus grand parmi ces 20 nombres.*/ 
$nbr = readline("Saisir un nombre : ");


//Instruction

for($i = 0; $i <= 20 ; $i++){
        $nbr2 = readline("Saisir nombre".$i.": ");
        if($nbr > $nbr2){
            
        }else $nbr = $nbr2;
}
//Affichage du plus grand stocké dans $nbr

echo $nbr;






?>