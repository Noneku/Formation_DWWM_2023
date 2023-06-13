<?php

/* Ecrire un algorithme qui permet donner le résultat d'un étudiant à un module 
sachant que ce module est sanctionné par 
une note d'oral de coefficient 1 et 
une note d'écrit de coefficient 2. 
La moyenne obtenue doit être supérieure ou égale à 10 pour valider le module. */

$noteEcrit = readline("Saisir la note ecrit de l'éléve : ");
$noteOral = readline("Saisir la note oral de l'éléve : ");

$moyenne = (($noteEcrit*1) + ($noteOral*2))/3;

if($moyenne >= 10){
    echo "L'éléve a validé son module avec $moyenne de moyenne.";
}else{
    echo "L'éléve n'a pas validé son module avec $moyenne de moyenne.";
}



?>