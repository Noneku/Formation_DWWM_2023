<?php 
//Toujours à partir de deux tableaux précédement saisis, écrivez un algorithme qui calcule le schtroumpf de deux tableaux. 
//Pour calculer le schtroumpf, il faut multiplier chaque élément du tableau 1 par chaque élément du tableau 2, et additionner le tout.
//Par exemple si l'on a:

//création de tableau.
$tab1 = array(2,5,8,4);
//creation tableau schtroumpf
$schtroumpf = 0;
//création de tableau 2.
$tab2 = array(6,7);
//iteration
$i=0;
$i2=0;
for ($i=0; $i < count($tab1); $i++) { 
    for ($i2=0; $i2 < count($tab2); $i2++) { 
        
        $schtroumpf = $schtroumpf + $tab1[$i] * $tab2[$i2];
       }
   }
print_r ($schtroumpf)




?>