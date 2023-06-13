<?php

$nom1 = readline("Saisir le premier nom : ");
$nom2 = readline("Saisir le premier nom : ");
$nom3 = readline("Saisir le premier nom : ");

if(($nom1 < $nom2) && ($nom2 < $nom3) ){
    echo "les noms sont rangés dans l'ordre alphabétique";
}else
echo "les noms ne sont pas rangés dans l'ordre alphabétique";


?> 