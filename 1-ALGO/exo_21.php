<?php
//ecrire un algo demandant un nombre et retournant son factorielle.*/

//Declaration des variables
 echo "Entrez un nombre : ";
 $nombreinit = trim(fgets(STDIN));
 $nbFin = 1;

 //traitement et affichage

 for ($i = 1 ; $i <= $nombreinit; $i++ ){
$nbFin = $nbFin * $i;
 }

echo $nbFin;

?>