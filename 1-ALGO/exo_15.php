<?php


//  vérifier si les noms sont dans l'ordre alphabétique ou non 


$nom1 = readline(" Entrez votre premier nom : ");
$nom2 = readline(" Entrez votre deuxieme nom : ");
$nom3 = readline(" Entrez votre troisième nom : ");


if ( $nom1<$nom2 && $nom1<$nom3 && $nom2<$nom3) {
    echo " les noms sont dans l'ordre alphanétique";
} else {
    echo " il ne sont pas dans l'ordre alphabétique";
}

echo $nom1;
echo "\n";
echo $nom2;
echo "\n";
echo $nom3;




?>