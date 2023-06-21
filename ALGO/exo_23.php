<?php
//Réécrire l'algorithme précédent, mais cette fois-ci on ne connait pas d'avance combien l'utilisateur souhaite saisir de nombre. 
//la saisie des nombres s'arrête lorsque l'utilisateur entre un zéro.

#Déclaration des variables
$pg = 0;
$nbsaisie = 100;
$nbPos = 0;
$i = 0;

#Traitement
 while($nbsaisie != 0 ) {
    echo "Entrez un nombre : ";
    $nbsaisie = trim(fgets(STDIN));
 

    if ($pg < $nbsaisie) {
        $pg = $nbsaisie;
        $nbPos = $i++;
    }
}

echo "Le plus grand nombre est ".$pg;
echo " il est en position ".$nbPos;
?>