<?php

$nb = readline("Entrez un nombre : ");
$stock = "";

for ($i=1; $i <= $nb; $i++) { 
    $stock .= $i;
    echo "$stock \n";
}

?>