<?php
//Ecrivez un algorithme calculant la somme des valeurs d'un tableau,
//(on suppose que le tableau à été préablement saisi)


//creation de tableau.

$tab=array(1,3,4,5,6);

$sommetab=null;

for ($i=0; $i < count($tab); $i++) { 
 $sommetab = $sommetab + $tab[$i];
}

echo $sommetab;
?>





