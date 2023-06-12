<?php
/*Ecrire un algo qui permet donner le resultat d'une multiplication de 2 nombres sans faire le produit */
// Declaration des variables
echo "donner un nombre : ";
$nbr1 = trim(fgets(STDIN));
echo "donner un nombre : ";
$nbr2= trim(fgets(STDIN));
$res=0;

// traitement
for ($i=0; $i <$nbr2 ; $i++) { 

    $res+=$nbr1;

}

echo"le resultat du produit de ".$nbr1." X ".$nbr2." est ".$res;
?>