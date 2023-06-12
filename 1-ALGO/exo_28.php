<?php

//Variables
$nb = readline("Entrer un nombre : ");
$stock = "";

//Traitement
for ($i=1; $i <= $nb ; $i++) {
    //Add turn of loop in stock of type String
    $stock .= $i;
    echo $stock."\n";
}


?>