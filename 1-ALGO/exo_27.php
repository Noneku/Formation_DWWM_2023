<?php
/*Ecrire un algo qui permet donner le resultatd'un etudiant a un module
moyenne de oral et ecrit
-module oral coef1
-module ecrit coef2 */
// Declaration des variables

$oral= readline("donner la note de l'oral : ");
$ecrit=readline("donner la note de l'écrit: ");
$moyenne=0;
//calcul de la moyenne 
$moyenne=((2*$ecrit)+$oral)/3;

if ($moyenne<10) {

    echo "vous êtes recalés";

}else {

    echo"Félicitation vous êtes diplomés avec une moyenne de ".$moyenne ;

}
?>