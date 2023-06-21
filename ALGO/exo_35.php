<?php
//Ecrivez un algorithme constituant un tableau, à partir de deux tableaux de même longueur préablement saisis.
//Le nouveau tableaux sera la somme des éléments des deux tableaux de départ.

//creation de tableau.
$tab1 = array(1,3,4,5,6);

//creation de tableau 2.
$tab2 = array(1,3,4,5,6);

//creation de tableau 3.
$tab3 = array();

for ($i=0; $i < count($tab1); $i++) { 
    $tab3[$i] = $tab1[$i] + $tab2[$i];
   }

   print_r ($tab3); 
?>