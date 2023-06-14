<?php
#On déclare et saisit les variables

echo "Entrez le premier nom : ";
    $nom1 = trim(fgets(STDIN));
    
 echo "Entrez le deuxieme nom : ";
    $nom2 = trim(fgets(STDIN));
    

echo "Entrez le troisieme nom : ";
    $nom3 = trim(fgets(STDIN));
    

#On teste le signe du produit des trois nom


if ($nom1 = $nom2 && $nom2 = $nom3){

    echo ("Les noms sont rangés dans l'ordre alphabétique.");
}

else {
    echo ("Les noms ne sont pas rangés dans l'ordre alphabétique.");
}






?>