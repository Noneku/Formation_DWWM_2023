<?php
/*Ecrivez un algorithme permettant, toujours sur le même principe, à l'utilisateur de saisir un nombre déterminé de valeur. le programme, 
une fois la saisie terminée, renvoie la plus grande valeur en précisant quelle position elle occupe dans le tableau. On prendra soin d'effectuer 
la saisie dans un premier temps, et la recherche de la plus grande valeur du tableau dans un second temps.
*/

//création de tableau.
$tab1 = array();
$positionMax = 0;
//Déclaration variable.

$i = 0;

echo "Entrez le nombre de tour: ";
$nombretab = intval(readline("Entrez un nombre : ")); // Demande à l'utilisateur d'entrer un nombre

//INSTRUCTION

for ($i = 0; $i < $nombretab; $i++) {
    echo "Entrez le nombre n° " . ($i + 1) . ": ";  //est utilisé pour afficher le numéro de l'itération (1, 2, 3,... 
    $tab1[$i] = intval(readline());
}


for ($i = 1; $i < $nombretab; $i++) {
        if($tab1[$i] > $tab1[$positionMax]){ 
        $positionMax = $i;
           /*La condition if est utilisée pour comparer deux valeurs :
             $tab1[$i] et $tab1[$positionMax]. Si la valeur de $tab1[$i] est supérieure
              à la valeur de $tab1[$positionMax], alors le bloc de code à l'intérieur de 
              l'instruction if est exécuté.*/ 
    }

    echo "Le plus grand nombre saisi est : " . $tab1[$positionMax]."\n";
    echo "La position saisi est : " . $positionMax."\n";
}
/*À l'intérieur du bloc de code de l'instruction if, la variable $positionMax est mise à jour
 avec la valeur actuelle de $i. Cela signifie que si la valeur à l'indice $i du tableau $tab1 
 est plus grande que la valeur à l'indice $positionMax, alors $positionMax est mis à jour pour
  contenir la nouvelle valeur de $i.*/ 