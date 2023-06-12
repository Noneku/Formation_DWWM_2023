<?php
/* ecrire un algo qui permet de calculer la somme des valeurs d'un tableau
 */
$Valeurs = array(1,2,5,8,9);
$Valeurs2= array(2,3,4,5,8);
$somme=array();
for ($i=0; $i < count($Valeurs); $i++) { 
    
   $somme[$i]=$Valeurs[$i]+$Valeurs2[$i];

}
print_r($somme);

?>