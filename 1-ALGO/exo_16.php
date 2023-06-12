<?php

//Variables
$nbr1 = readline("Entrer un nombre : ");
$nbr2 = readline("Entrer un second nombre : ");
$total = $nbr1 * $nbr2;

//Traitement
if($total > 0){
    echo "Le résultat est $total donc positif";
}
else{
    if($total === 0){
        $total = null;
        echo "Le résultat est null";
    }
    else {
        echo "Le résultat est $total donc négatif";
    }
}

?>