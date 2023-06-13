<?php 

/*Toujours à partir de deux tableaux saisis, ecrivez un algorithme qui 
calcule le schtroumpf des deux tableaux. 
Pour calculer le schtroumpf, 
il faut multiplier chaque élément du tableau 1 par chaque élément du tableau 2, 
et additionner le tout. */ 

$tab1 = array(2,5,8,4);
$tab2 = array(6,7);
$total = null;
for($i = 0 ; $i<count($tab2); $i++){
        
    for($j = 0; $j<count($tab1); $j++){
       $total +=  $tab2[$i] * $tab1[$j];
    }
}

echo $total;


?>