<?php

$nom1 = readline("Saisissez un nom : ");
$nom2 = readline("Saisissez un autre nom : ");
$nom3 = readline("Saisissez encore un autre nom : ");

if($nom1<$nom2 && $nom2<$nom3){
    echo "Ils sont ranger dans l'ordre alphabetique";
}else{
    echo "Ils ne sont pas dans l'ordre alphabetique";
}

?>