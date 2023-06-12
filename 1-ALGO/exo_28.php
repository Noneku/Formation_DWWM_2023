<?php
/*Ecrire un algo qui creer un triangle 
exemple
1
12
123
1234 */
// Declaration des variables

$nb= readline("donner un nombre : ");
$i=1;
$boucle="";

//traitement
for ($i=1; $i <=$nb; $i++) { 
    
    $boucle.=$i;//concatenation
    echo $boucle."\n";
}

?>