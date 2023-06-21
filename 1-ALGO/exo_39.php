<?php
// la saisie
$valeurs = readline("rajouter une valeurs");
// les variables
$notes = array();
$moyenne = 0;
$sum = 0;
$nNotes = 0;
//on tete
for ($i=0; $i < $valeurs ; $i++) 
{ 
    $notes[$i] = readline("entrer une note");

     $sum += $notes[$i];
}

$moyenne = $sum/$valeurs;

for ($i=0; $i < $valeurs ; $i++) 

{ 
    if ($notes[$i]>$moyenne) 
{
    $nNotes++;
}

}

//affichage
   echo $moyenne;
   echo "le nombre de note au dessus de la moyenne ".$nNotes;
?>