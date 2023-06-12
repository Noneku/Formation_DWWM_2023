<?php
/* ecrire un algo qui permet de calculer la somme des valeurs d'unun tableau
 */
$Valeurs = array(1,2,3,4,5,6);
$somme=0;

for ($i=0; $i < count($Valeurs); $i++) { 

   $somme+=$Valeurs[$i];

}

echo $somme;

?>