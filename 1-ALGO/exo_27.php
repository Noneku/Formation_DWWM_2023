<?php

//Variables

$module = readline("Entrer un module : ");
$coef1 = readline("Entrer une note (Coef : 1) : "); //Note Oral
$coef2 = readline("Entrer une note (Coef : 2) : "); //Note écrit

//Traitement
$moyenne = ((2*$coef1)+$coef2) / 3;

//Si la moyenne est >= à 10 alors ADMIS
if($moyenne >= 10){
    echo "Vous avez réussis, votre moyenne est de : $moyenne, du module : $module";
}else {
    echo "Echec !";
}

?>