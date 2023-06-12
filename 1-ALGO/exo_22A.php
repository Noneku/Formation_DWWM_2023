<?php
/*Ecrire un algo qui demande  20 nombres  et qui ensuite lui affiche le plus grand */
// Declaration des variables

$nbr=0;
$comp=0;
$position=0;
//boucle for
for ($i=0; $i < 20; $i++) { 

    $nbr= readline("tapez un nombre : ");
    
    //calcul
    if ($comp<$nbr) {

        $comp=$nbr;
        $position=$i;

    }
    //affichage

}
echo "le plus nombre grand est :".$comp."\n il est en ";
?>