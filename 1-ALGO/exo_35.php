<?php

$tab=[];

$tab1 =array(4,8,7,9,1,5,4,6);
   
 $tab2 = array(7,6,5,2,1,3,7,4);


for ($i=0; $i <8 ; $i++) { 
    $tab[$i] =$tab1 + $tab2;


}


$tab = array_merge($tab1,$tab2); //fusion des deux tableaux
$total = array_sum($tab);  //Addition des sommes

echo $total; //Affiche 

?>