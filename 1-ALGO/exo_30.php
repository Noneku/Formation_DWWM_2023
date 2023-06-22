<?php
//Donnez le résultat de la multiplication de deux nombres en ne faisant que des additions.

//Déclaration de la variable resultat.
$nombreresultat = 0;

//Déclaration de la variable nombre.
$nombreA = 0; 
$nombreB = 0; 

//Entrer nombre pour la console terminal.
$nombreA = readline("Entrer un chiffre:");
$nombreB = readline("Entrer un chiffre:");


for($i=0; $i< $nombreB; $i++){ 
$nombreresultat = $nombreresultat + $nombreA;
}

//Affichage resultat.
$nombreresultat= "Le résultat est : " . $nombreresultat;
echo ($nombreresultat);
//



?>