<?php

//Variables
$tab = [];

for ($i=0; $i < 9; $i++) { 
    //Déclarer $nbr dans une boucle permet de le demander 9 fois
    $nbr = readline("Entrer un nombre : ");
    //Insert the value of $nbr in Array $tab
    $tab[$i] = $nbr;
}

var_dump($tab)
?> ;