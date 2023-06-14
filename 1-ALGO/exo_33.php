<?php

// Ecrire un algo qui demande de saisir un nb de valeurs à entrer, de les intégrer dans un tableau et de déterminer le nombre de valeurs négatives & positives saisies 

// Déclaration :
$nbSaisies = readline("Entrez le nombre de saisie à faire : ");
$val = array();
$nbPos = 0;
$nbNeg = 0;


// Instructions :
for ($i = 0; $i < $nbSaisies; $i++) {
    $val[$i] = readline("Saisir un nombre à insérer dans le tableau : ");

    if ($val[$i]>0) {
        $nbPos++;
    } else {
        $nbNeg++;
    }
}


// Affichage :
print_r($val);
echo "Il y a $nbPos nombre(s) positif(s) et $nbNeg nombre(s) négatif(s).";


?>