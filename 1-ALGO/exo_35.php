<?php
/*Ecrivez un algo constituant un tableau, 
à partir de deux tableaux de même longueur préalablement saisis. Le nouveau tableau sera la somme des éléments des deux tableaux */ 

//Declarations
$tab1 = array(4,8,7,9,1,5,4,6);
$tab2 = array(7,6,5,2,1,3,7,4);
$tab3 = array();

//Instructions

for($i = 0; $i < count($tab1); $i++){
    $tab3[$i]= $tab1[$i] + $tab2[$i];
}

//Affichage
print_r($tab3);



?>