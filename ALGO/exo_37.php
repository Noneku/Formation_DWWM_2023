<?php 
//Ecrivez un algorithme qui permette la saisie d'un nobre quelconque de valeur, Toutes les valeurs doivent êtres ensuite augmentée de
//1, et le nouveau tableau sera affiché à l'écran.



//creation de tableau.
$tab = array (1,2,3,4);
$tab2 = array ();

//traitement
for ($i=0; $i < count($tab); $i++) { 
     $tab2[$i] = $tab[$i] + 1 ; 
}
print_r($tab2);
?>