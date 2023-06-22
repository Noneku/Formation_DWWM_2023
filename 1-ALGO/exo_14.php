<?php

$nb = readline("Saisissez un nombre : ");
$nb2 = readline("Saisissez un 2eme nombre : ");

if($nb<0 || $nb2<0){
    echo "Le nombre est négatif";
}else{
    echo "le nombre est positif";
}

?>