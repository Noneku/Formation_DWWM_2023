<?php

$tab = array ("D","E","C","A","L","A","G","E");
$tab1 = array("");
$i = 0;
print_r ($tab);




for ($i = 0 ; $i < count($tab); $i ++) { 
     $tab1[$i] = $tab[$i+1];
 }

$tab1[count($tab)-1] = $tab[0];
print_r ($tab1);
?>